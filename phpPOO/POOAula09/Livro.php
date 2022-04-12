<?php

require_once './Publicacao.php';
require_once './Pessoa.php';

class Livro implements Publicacao {

    private $titulo;
    private $autor;
    private $totPag;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function __construct($titulo, $autor, $totPag, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPag = $totPag;
        $this->leitor = $leitor;
        $this->setAberto(false);
        $this->setPagAtual(0);
    }

    public function detalhe() {
        print "<p>Livro " . $this->getTitulo() . " escrito por " . $this->getAutor();
        print "<br>Paginas " . $this->getTotPag() . " Pagina atual: " . $this->getPagAtual();
        print "<br>Sendo lido por " . $this->getLeitor()->getNome() . "</p>";
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getTotPag() {
        return $this->totPag;
    }

    public function getPagAtual() {
        return $this->pagAtual;
    }

    public function getAberto() {
        return $this->aberto;
    }

    public function getLeitor() {
        return $this->leitor;
    }

    public function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    public function setAutor($autor): void {
        $this->autor = $autor;
    }

    public function setTotPag($totPag): void {
        $this->totPag = $totPag;
    }

    public function setPagAtual($pagAtual): void {
        $this->pagAtual = $pagAtual;
    }

    public function setAberto($aberto): void {
        $this->aberto = $aberto;
    }

    public function setLeitor($leitor): void {
        $this->leitor = $leitor;
    }

    public function abrir() {
        $this->setAberto(true);
    }

    public function avançarPag() {
        $this->setPagAtual($this->getPagAtual() + 1);
    }

    public function fechar() {
        $this->setAberto(false);
    }

    public function folhear($p) {
        if ($p < $this->getTotPag()) {
            $this->setPagAtual($p);
        } else {
            $this->setPagAtual(0);
        }
    }

    public function voltarPag() {
        if ($this->getPagAtual() > 0) {
            $this->setPagAtual($this->getPagAtual() - 1);
        }else{
            $this->setPagAtual(0);
        }
    }

}
