<?php


class Escola {

    private string $aluno;
    private float  $faltas;
    private string $situa;
    

    public function __construct(string $alunoa, float $faltass, string $situasa)
    {
      $this -> aluno = $alunoa;
      $this -> faltas = $faltass;
      $this -> situa = $situasa;
      $this -> rodaporfalta ($faltass);

    }


    private function rodaporfalta($faltass)
    {
      if ($faltass >= 30){
        echo 'você reprovou por falta';
        exit();
      }
    }

    public function verfaltas ()
    {
      return $this -> faltas;
    }
    public function veraluno()
    {
      return $this -> aluno;
    }
    public function versitua()
    {
      return $this -> situa;
    }

}

