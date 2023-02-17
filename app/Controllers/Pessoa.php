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
        $model = new PessoaModel();
        $data = [
            'nome' => $this->request->getVar('nome'),
            'telefone'  => $this->request->getVar('telefone'),
            'endereco'  => $this->request->getVar('endereco'),
        ];
        $model->insert($data);
        return $this->response->redirect(site_url('/pessoa'));
    }


}
