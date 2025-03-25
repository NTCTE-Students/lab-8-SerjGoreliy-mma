<?php

abstract class Document {
    abstract public function save();
}

class PDFDocument extends Document {
    public function save() {
        print "Сохранение в формате PDF.<br>";
    }
}

class WordDocument extends Document {
    public function save() {
        print "Сохранение в формате Word.<br>";
    }
}
class ExcelDocument extends Document {
    public function save() {
        print "Сохранение в формате Excel.<br>";
    }
}

$pdf = new PDFDocument();
$word = new WordDocument();
$excel = new ExcelDocument();

$pdf->save();
$word->save();
$excel->save();