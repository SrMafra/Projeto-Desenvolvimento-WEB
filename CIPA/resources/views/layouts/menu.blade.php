    <!-- START SIDEBAR -->

    <div class="sidebar clearfix">

        <ul class="sidebar-panel nav">
            <li class="sidetitle">MENU</li>

            <li><a href="#"><span class="icon color5"><i class="fa fa-home"></i></span>Dashboard<span
                        class="label label-default"></span></a></li>


            <li><a href="#"><span class="icon color7"><i class="fa fa-group"></i></span>Profiossionais<span
                        class="caret"></span></a>
                <ul>
                    <li><a href="#">SST</a></li>
                    <li><a href="#">Convidados / Palestrantes</a></li>
                </ul>
            </li>

            <li><a href="#"><span class="icon color7"><i class="fa fa-building"></i></span>Industria<span
                        class="caret"></span></a>
                <ul>
                    <li><a href="{{route('funcao.index') }}">Funções</a></li>
                    <li><a href="{{route('setor.index') }}">Setores</a></li>
                    <li><a href="{{route('funcionario.index') }}">Funcionarios</a></li>
                    <li><a href="#">Advertencias</a></li>
                </ul>
            </li>
            <li><a href="#"><span class="icon color7"><i class="fa fa-gears"></i></span>Equipamentos de Segurança<span
                        class="caret"></span></a>
                <ul>
                    <li><a href="{{ route('tipo_de_epi.index') }}">Tipos de EPI</a></li>
                    <li><a href="{{ route('epi.index') }}">Cadastro de Epi</a></li>
                </ul>
            </li>
        </ul>


    </div>
    <!-- END SIDEBAR -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
