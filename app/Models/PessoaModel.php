<?php 
namespace App\Models;

use CodeIgniter\Model;

class PessoaModel extends Model
{
    protected $table      = 'pessoa';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome', 'telefone', 'endereco'];
    //protected $foreignKey = ['idUsuarioCriou', 'user'];


    public function createPessoa(){
        //
    }

    public function deletePessoa(){
        //
    }

    public function updatePessoa(){
        //
    }

    /**
     * Retorna a pessoa encontrada de acordo com o parametro
     * @id id da pessoa 
     */
    public function getPessoa($id = null){
        return $this->find($id);
    }

    public function getPessoas(){
        return $this->findAll();

    }

    public function getPessoaPesquisa($termo){
        $tipoTermo = "";
        $where = "";
        if(isset($termo)){
            switch ($termo) {
                case 'integer':
                    $where = " telefone like '%$termo%' ";
                    break;
                case 'string':
                    $where = "  nome like '%$termo%'
                    OR 
                    endereco like '%$termo%' ";
                    break;
                default:
                    return ""; 
                break;
            }
        }
        return $builder->where($where);
    }

}   

