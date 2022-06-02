<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa 
{
    private $matricula;
    private $curso;
    
    //metodos
    
    public function cancelarMatr()
    {
        echo "<p>Matrícula será cancelada</p>";        
    }
    
    //metodos especiais (get/set)
    
    public function getMatricula() 
    {
        return $this->matricula;
    }

    public function getCurso() 
    {
        return $this->curso;
    }

    public function setMatricula($matricula): void 
    {
        $this->matricula = $matricula;
    }

    public function setCurso($curso): void 
    {
        $this->curso = $curso;
    }


}
