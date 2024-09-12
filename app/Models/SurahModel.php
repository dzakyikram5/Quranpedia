<?php

namespace App\Models;

use CodeIgniter\Model;

class SurahModel extends Model
{
    protected $table = 'arabicquran';

    public function getWordsByRootId($rootId)
    {
        $arabicWordJson = file_get_contents('arabicword.json');
        $arabicWordData = json_decode($arabicWordJson, true);

        $matchedWords = [];
        foreach ($arabicWordData['ArabicWord'] as $arabicWord) {
            if ($arabicWord['root_id'] == $rootId) {
                $matchedWords[] = $arabicWord['word'];
            }
        }

        return $matchedWords;
    }

    public function getQuranVersesByWords($words)
    {
        $matchedVerses = [];
    
        foreach ($words as $word) {
            $verses = $this->select('surat, ayat, text')->where('text LIKE', "%$word%")->findAll();
    
            foreach ($verses as $verse) {
                $matchedWords = [];
                $verseWords = explode(' ', $verse['text']); // Memecah teks ayat menjadi kata-kata
    
                foreach ($verseWords as $verseWord) {
                    $cleanedWord = preg_replace("/\p{P}/u", '', $verseWord); // Menghapus tanda baca dari kata
    
                    if (in_array($cleanedWord, $words)) {
                        $matchedWords[] = $verseWord; // Menambahkan kata yang cocok ke dalam array matchedWords
                    }
                }
    
                if (!empty($matchedWords)) {
                    $verse['matchedWords'] = array_unique($matchedWords); // Menghapus kata-kata duplikat dari array matchedWords
                    $matchedVerses[] = $verse; // Menambahkan data ayat yang cocok ke dalam array matchedVerses
                }
            }
        }
    
        return $matchedVerses;
    }
    
}