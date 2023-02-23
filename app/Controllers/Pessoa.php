<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PessoaModel;

class Pessoa extends Controller
{
	public function index()
	{
        $model = new PessoaModel();

        $dataHeader = [
            'pessoas'  => $model->getPessoas(),
            'title' => 'Visualizar Pessoas',
        ];

        return view('templates/header', $dataHeader)
            . view('pages/pessoa/index')
            . view('templates/footer');
	}

	public function view($id)
	{
		$model = new PessoaModel();

        $dataHeader = [
            'pessoa'  => $model->getPessoa($id),
            'title' => 'Pessoa ' . $id,
        ];

        return view('templates/header', $dataHeader)
            . view('pages/pessoa/view')
            . view('templates/footer');
	}

    public function create()
    {
        $dataHeader = [
            'title' => 'Criar Nova Pessoa',
        ];

        return view('templates/header', $dataHeader)
            . view('pages/pessoa/create')
            . view('templates/footer');
    }

    public function save(){


        /*
        $msgErro = $this->validar();

        if($msgErro == ""){
            $model = new PessoaModel();
            $data = [
                'nome' => $this->request->getVar('nome'),
                'telefone'  => $this->request->getVar('telefone'),
                'endereco'  => $this->request->getVar('endereco'),
            ];
            $model->insert($data);
        }else{
            return $msgErro;
        }
        return $this->response->redirect(site_url('/pessoa'));*/
        return "";
    }

    /*
    public function validar(){
        $msgErro = "";
        $nome = $this->request->getVar('nome');

        if(count($nome) >= 2 && count($nome) <= 250){
            return true;
        }else{
            $msgErro = "O campo Nome deve ter até 250 caracteres e no mínimo 2 caracteres";
        }

        $cpf = $this->request->getVar('cpf');
        $cpf = str_replace('.','',$cpf);
        $cpf = str_replace('-','',$cpf);
        $cpf = str_replace(' ','',$cpf);
        if(is_numberic($cpf)){
            if(count($cpf) == 11){
                if(!$this->validaCPF($cpf)){
                    $msgErro = "O campo CPF é inválido. Preencha corretamente.":
                }
            }
        }else{
            $msgErro = "O campo CPF é inválido. Preencha somente com números.":
        }


        return $msgErro;
    }

    public function validaCPF($cpf) {
 
        // Extrai somente os números
        $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
         
        // Verifica se foi informado todos os digitos corretamente
        if (strlen($cpf) != 11) {
            return false;
        }

        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }
        return true;
    }*/

}
