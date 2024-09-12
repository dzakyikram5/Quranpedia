<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DetailModel;
use App\Models\SurahModel;
// use CodeIgniter\Files\Paths;

class Detailv extends BaseController
{
    protected $surahModel;
    protected $detailModel;
    public function __construct()
    {
        $this->surahModel = new SurahModel();
        $this->detailModel = new DetailModel();
        // parent::__construct();
        helper('filesystem');
    }

    public function getRootData($pageNumber)
    {

    return view('page/' .$pageNumber);



    }

    public function getData()
    {
        $selectedText = $this->request->getVar('selectedText');
    
        $surahModel = new SurahModel();
    
        $arabicWordJson = file_get_contents('arabicword.json');
        $arabicWordData = json_decode($arabicWordJson, true);
    
        $rootWordsJson = file_get_contents('rootwords.json');
        $rootWordsData = json_decode($rootWordsJson, true);
    
        $matchedRootId = null;
        $matchedRootWord = '';
    
        foreach ($arabicWordData['ArabicWord'] as $arabicWord) {
            if ($arabicWord['word'] == $selectedText) {
                $matchedRootId = $arabicWord['root_id'];
                break;
            }
        }
    
        if ($matchedRootId) {
            foreach ($rootWordsData['RootWords'] as $rootWord) {
                if ($rootWord['root_id'] == $matchedRootId) {
                    $matchedRootWord = $rootWord['root_word'];
                    break;
                }
            }
        }
    
        $matchedWords = [];
        if ($matchedRootId) {
            $matchedWords = $surahModel->getWordsByRootId($matchedRootId);
        }
    
        $matchedVerses = [];
        if (!empty($matchedWords)) {
            $matchedVerses = $surahModel->getQuranVersesByWords($matchedWords);
            
            // Menghapus data yang duplikat
            $matchedVerses = array_map("unserialize", array_unique(array_map("serialize", $matchedVerses)));
            $matchedVerses = array_values($matchedVerses);
        }
    
        $data = [
            'selectedText' => $selectedText,
            'matchedRootId' => $matchedRootId,
            'matchedRootWord' => $matchedRootWord,
            'matchedWords' => $matchedWords,
            'matchedVerses' => $matchedVerses,
        ];
    
        return view('page/detailv', $data);
    }
    

    
    
    
    
    
    
    
    
    
    
      
    

    public function akarkata()
    {
        $detailakar = $this->detailModel->findAll();

        $kata = [
            'akarquran' => $detailakar,
        ];

    return view ('page/1', $kata);
    }
}