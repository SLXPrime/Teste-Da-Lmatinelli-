<?php

namespace App\View\Components;

use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class BannerArquitetos extends Component
{
    /**
     * Dados do banner
     *
     * @var mixed
     */
    public $Banner;

    /**
     * Criação de uma nova instância do componente.
     *
     * @return void
     */
    public function __construct()
    {
        // Consulta os dados da tabela 'nossosarquitetos'
        $this->Banner = DB::table('nossosarquitetos')->get();
    }

    /**
     * Renderiza a view do componente.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // Retorna a view do componente
        return view('components.banner-arquitetos');
    }
}
