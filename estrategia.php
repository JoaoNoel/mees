<style>
    #slider-container {
        display: none;
    }
</style>
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="#">Ministerio</a></li>
                    <li class="active">Estratégia</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1>Estratégia</h1>
            </div>
        </div>
    </div>
</section>

<div class="row areaBack">
    <div class="container">
        <div class=" diagnostc col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <aside class="sidebar">
                        <ul class="nav nav-list mb-xlg">
                            <li><a href="?pag=quemsomos">Quem somos</a></li>
                            <li><a href="?pag=visao">Visão</a></li>
                            <li><a href="?pag=missao">Missão</a></li>
                            <li class="active"><a href="?pag=estrategia">Estratégia</a></li>
                            <li><a href="?pag=estrutura">Estrutura do Ministério</a></li>
                            <li><a href="?pag=sisEduc">O Sistema Educativo</a></li>
                            <li><a href="?pag=visao_estrategica">Legislações</a></li>
                            <li>
                                <a href="#">Direções Centrais</a>
                                <ul>
                                    <div class="dropdown-mega-content">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <span class="dropdown-mega-sub-title"><a href="?pag=depe" data-plugin-tooltip="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Direcção da Educação Pré-Escolar">DEPE</a></span>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="dropdown-mega-sub-title"><a href="?pag=destp" data-plugin-tooltip="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Direcção do Ensino Secundário e Tecnico Profissional">DESTP</a></span>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="dropdown-mega-sub-title"><a href="?pag=deja" data-plugin-tooltip="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Direcção de Educação de Jovens e Adultos">DEJA</a></span>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="dropdown-mega-sub-title"><a href="?pag=desc" data-plugin-tooltip="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Direcção do Ensino Superior e Ciência">DESC</a></span>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="dropdown-mega-sub-title"><a href="?pag=pnase" data-plugin-tooltip="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Programa Nacional de Alimentação e Saúde Escolar">PNASE</a></a></span>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="dropdown-mega-sub-title"><a href="?pag=dee" data-plugin-tooltip="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Direcção do Ensino Especial">DEE</a></span>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="dropdown-mega-sub-title"><a href="?pag=iges" data-plugin-tooltip="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Inspeção Geral de Educação e Supervisão">IGES</a></span>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="dropdown-mega-sub-title"><a href="?pag=dae" data-plugin-tooltip="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Direcção de Administração Escolar">DAE</a></span>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="dropdown-mega-sub-title"><a href="?pag=daf" data-plugin-tooltip="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Direcção Administrativa e Finaceira">DAF</a></span>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="dropdown-mega-sub-title"><a href="?pag=dpie" data-plugin-tooltip="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Direcção de Planeamento e Inovação Educativa">DPIE</a></span>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="dropdown-mega-sub-title"><a href="?pag=deb" data-plugin-tooltip="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Direcção do Ensino Básico">DEB</a></span>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="dropdown-mega-sub-title"><a href="?pag=exe" data-plugin-tooltip="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Direcção do Ensino Básico">DEB</a></span>
                                            </div>

                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="?pag=progr_proje">Programas e Projectos</a></li>
                            <li><a href="?pag=compInternacional">Compromissos Internacionais</a></li>

                        </ul>
                    </aside>
                </div>
                <div class="col-md-9">
                    <h2>Estratégia</h2>
                    <hr class="tall">
                    <div class="row">
                        <?php
                        $connectd = mysqli_connect('localhost', 'root', 'bandido@ad', 'db_site_mees');
                        $gov = 1;
                        $resultado = mysqli_query($connectd, "SELECT descricao FROM tb_quem_somos WHERE Estado = 'ACTIVO' AND fk_gov_quem_somos = '$gov'") or die("erro ao selecionar quem somos");
                        $resul_visao = mysqli_query($connectd, "SELECT descricao FROM tb_visao WHERE Estado = 'ACTIVO' AND fk_gov_visao = '$gov'") or die("erro ao selecionar visao");
                        $resul_missao = mysqli_query($connectd, "SELECT descricao FROM tb_missao WHERE Estado = 'ACTIVO' AND fk_gov_missao = '$gov'") or die("erro ao selecionar missao");
                        $resul_estra = mysqli_query($connectd, "SELECT descricao FROM tb_estrategia WHERE Estado = 'ACTIVO' AND fk_gov_estrategia = '$gov'") or die("erro ao selecionar missao");
                        ?>
                        <div class="col-md-12 page-content">
                            <p>
                                <?php
                                while ($linh_estr = mysqli_fetch_assoc($resul_estra)) {
                                    $estr = utf8_encode($linh_estr['descricao']);
                                    echo "<p class='justificar_texto'>" . $estr . "</p>";
                                }
                                fechar_conexao_php_mysql($connectd);
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>