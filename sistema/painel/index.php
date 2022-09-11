    <?php
    @session_start();
    require_once("verificar.php");
    require_once("../conexao.php");
    $id_usuario = $_SESSION['id'];

    $query = $pdo->query("SELECT * from usuarios where id = '$id_usuario'");
    $res = $query->fetchAll(PDO::FETCH_ASSOC);
    $total_reg = @count($res);

    if ($total_reg > 0) {
        $nome_usuario = $res[0]['nome'];
        $email_usuario = $res[0]['email'];
        $matricula_usuario = $res[0]['matricula'];
        $cfp_usuario = $res[0]['cpf'];
        $senha_usuario = $res[0]['senha'];
        $nivel_usuario = $res[0]['nivel'];
    }

    if(@$_GET['pag']==''){

      $pag = 'home';  
    }
    else {

        $pag = $_GET['pag'];

    }       
           
    ?>     
        <!DOCTYPE HTML>
        <html>
        <head>
        <title>Cálculos Judiciais - TJPE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
        SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

        <!-- Custom CSS -->
        <link href="css/style.css" rel='stylesheet' type='text/css' />

        <!-- font-awesome icons CSS -->
        <link href="css/font-awesome.css" rel="stylesheet"> 
        <!-- //font-awesome icons CSS-->

        <!-- side nav css file -->
        <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
        <!-- //side nav css file -->
         
         <!-- js-->        
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/modernizr.custom.js"></script>

        <!--webfonts-->
        <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
        <!--//webfonts--> 

        <!-- chart -->
        <script src="js/Chart.js"></script>
        <!-- //chart -->

        <!-- Metis Menu -->
        <script src="js/metisMenu.min.js"></script>
        <script src="js/custom.js"></script>
        <link href="css/custom.css" rel="stylesheet">
        <!--//Metis Menu -->
        <style>
        #chartdiv {
          width: 100%;
          height: 295px;
        }
        </style>
        <!--pie-chart --><!-- index page sales reviews visitors pie chart -->
        <script src="js/pie-chart.js" type="text/javascript"></script>
         <script type="text/javascript">

                $(document).ready(function () {
                    $('#demo-pie-1').pieChart({
                        barColor: '#2dde98',
                        trackColor: '#eee',
                        lineCap: 'round',
                        lineWidth: 8,
                        onStep: function (from, to, percent) {
                            $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                        }
                    });

                    $('#demo-pie-2').pieChart({
                        barColor: '#8e43e7',
                        trackColor: '#eee',
                        lineCap: 'butt',
                        lineWidth: 8,
                        onStep: function (from, to, percent) {
                            $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                        }
                    });

                    $('#demo-pie-3').pieChart({
                        barColor: '#ffc168',
                        trackColor: '#eee',
                        lineCap: 'square',
                        lineWidth: 8,
                        onStep: function (from, to, percent) {
                            $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                        }
                    });

                   
                });

            </script>
        <!-- //pie-chart --><!-- index page sales reviews visitors pie chart -->

            
        </head> 
        <body class="cbp-spmenu-push">
            <div class="main-content">
            <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
                <!--left-fixed -navigation-->
                <aside class="sidebar-left">
              <nav class="navbar navbar-inverse">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <h1><a class="navbar-brand" href="index.php"><span class="fa fa-calculator"></span> Sistema<span class="dashboard_text">Cálculos Judiciais</span></a></h1>
                  </div>
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="sidebar-menu">
                      <li class="header">MENU DE NAVEGAÇÃO</li>
                      <li class="treeview">
                        <a href="index.php">
                        <i class="fa fa-home"></i> <span>Home</span>
                        </a>
                      </li>
                      <li class="treeview">
                        <a href="index.php?pag=lista_usuario">
                        <i class="fa fa-users"></i>
                        <span>Servidores</span>                        
                        </a>
                      </li>            
                      
                        <li class="treeview">
                        <a href="#">
                        <i class="fa fa-edit"></i> <span>Cálculos</span>
                        <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                          <li><a href="index.php?pag=calculos_civeis"><i class="fa fa-angle-right"></i>Cíveis</a></li>
                          <li><a href="index.php?pag=calculos_sucessoes"><i class="fa fa-angle-right"></i>Sucessões</a></li>
                          <li><a href="index.php?pag=calculos_familia"><i class="fa fa-angle-right"></i>Familia</a></li>
                          <li><a href="index.php?pag=calculos_fazenda"><i class="fa fa-angle-right"></i>Fazenda</a></li>
                          <li><a href="index.php?pag=calculos_criminais"><i class="fa fa-angle-right"></i>Criminais</a></li>
                          <li><a href="index.php?pag=calculos_custas"><i class="fa fa-angle-right"></i>Custas</a></li>
                          <li><a href="index.php?pag=adiciona_calculos"><i class="fa fa-angle-right"></i>Adicionar</a></li>
                        </ul>
                      </li>

                      <li class="treeview">
                        <a href="#">
                        <i class="fa fa-table"></i> <span>Relatórios</span>
                        <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                          <li><a href="index.php?pag=relatorio_servidores"><i class="fa fa-angle-right"></i>Servidores</a></li>                          
                          <li><a href="index.php?pag=relatorio_calculos"><i class="fa fa-angle-right"></i>Cálculos</a></li>
                        </ul>
                      </li>

                      <li class="treeview">
                        <a href="#">
                       <i class="fa fa-search"></i> <span>Pesquisar</span>
                        <i class="fa fa-angle-left pull-right"></i>
                        </a>                    
                        <ul class="treeview-menu">
                          <li><a href="index.php?pag=pesquisa_processos"><i class="fa fa-angle-right"></i> Processos</a></li>                                       
                        </ul>
                      </li>

                      <li class="treeview">
                        <a href="#">
                       <i class="fa fa-file"></i> <span>Arquivos</span>
                        <i class="fa fa-angle-left pull-right"></i>
                        </a>                    
                        <ul class="treeview-menu">
                          <li><a href="forms.html"><i class="fa fa-angle-right"></i> Atos </a></li>
                          <li><a href="https://www.tjpe.jus.br/documents/10180/0/-/f8e607be-c5e2-243c-84cf-b66a73c77d65"><i class="fa fa-angle-right"></i> Enunciados </a></li>
                          <li><a href="https://www.gilbertomelo.com.br/pdf/Instrucao_de_Servico_Contadores_DJ185_2011_05_10_2011_TJPE.pdf"><i class="fa fa-angle-right"></i> Instruções </a></li>
                          <li><a href="#"><i class="fa fa-angle-right"></i> Manuais </a></li>
                          <li><a href="index.php?pag=relatorio_servidores"><i class="fa fa-angle-right"></i> Certidões </a></li>
                          <li><a href="index.php?pag=relatorio_servidores"><i class="fa fa-angle-right"></i> Planilhas </a></li>                                                                 
                        </ul>
                      </li>

                      <li class="treeview">
                        <a href="#">
                       <i class="fa fa-file"></i> <span>Adicionar</span>
                        <i class="fa fa-angle-left pull-right"></i>
                        </a>                    
                        <ul class="treeview-menu">
                          <li><a href="index.php?pag=adiciona_arquivos"><i class="fa fa-angle-right"></i> Arquivos </a></li>                                                                                                               
                        </ul>
                      </li>

                      <li class="treeview">
                        <a href="#">
                       <i class="fa fa-link"></i> <span>Links</span>
                        <i class="fa fa-angle-left pull-right"></i>
                        </a>                    
                        <ul class="treeview-menu">
                        <li><a href="https://pje.tjpe.jus.br/1g/login.seam"><i class="fa fa-angle-right"></i> PJE </a></li>
                        <li><a href="https://www.tjpe.jus.br/custasjudiciais/xhtml/main.xhtml"><i class="fa fa-angle-right"></i> SICAJUD </a></li>
                          <li><a href="https://www3.bcb.gov.br/sgspub/localizarseries/localizarSeries.do?method=prepararTelaLocalizarSeries"><i class="fa fa-angle-right"></i> Séries Temporais - BCB </a></li>
                          <li><a href="https://www.trf4.jus.br/trf4/controlador.php?acao=pagina_visualizar&id_pagina=3176"><i class="fa fa-angle-right"></i> POUPNET </a></li>
                          <li><a href="https://www.gilbertomelo.com.br/"><i class="fa fa-angle-right"></i> Tabela ENCOGE </a></li>
                          <li><a href="https://www.sefaz.pe.gov.br/Servicos/ICD/Paginas/Perguntas-e-Respostas.aspx/"><i class="fa fa-angle-right"></i> ICD-PE </a></li>
                          <li><a href="https://legis.alepe.pe.gov.br/texto.aspx?tiponorma=1&numero=17116&complemento=0&ano=2020&tipo=&url=#:~:text=LEI%20N%C2%BA%2017.116%2C%20DE%204,Judici%C3%A1rio%20do%20Estado%20de%20Pernambuco./"><i class="fa fa-angle-right"></i> Nova lei de custas </a></li>
                          

                        </ul>
                      </li>

                    </ul>
                  </div>

                  <!-- /.navbar-collapse -->

              </nav>
            </aside>
            </div>
                <!--left-fixed -navigation-->
                
                <!-- header-starts -->
                <div class="sticky-header header-section ">
                    <div class="header-left">
                        <!--toggle button start-->
                        <button id="showLeftPush"><i class="fa fa-bars"></i></button>
                        <!--toggle button end-->
                        <div class="profile_details_left"></div>
                       
                        <div class="clearfix"> </div>
                    </div>
                    <div class="header-right">                      
                        
                                              
                        <div class="profile_details">       
                            <ul>
                                <li class="dropdown profile_details_drop">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <div class="profile_img">   
                                            <span class="prfil-img"><img src="" alt=""> </span> 
                                            <div class="user-name">
                                                <p><?php echo $nome_usuario ?></p>
                                                <span><?php echo $nivel_usuario ?></span>
                                            </div>
                                            <i class="fa fa-angle-down lnr"></i>
                                            <i class="fa fa-angle-up lnr"></i>
                                            <div class="clearfix"></div>    
                                        </div>  
                                    </a>
                                    <ul class="dropdown-menu drp-mnu">
                                        <li> <a href="#"><i class="fa fa-cog"></i> Configurações</a> </li> 
                                        <li> <a href="" data-toggle="modal" data-target="#modalPerfil"><i class="fa fa-user"></i> Editar perfil</a> </li>                                        
                                        <li> <a href="logout.php"><i class="fa fa-sign-out"></i> Sair</a> </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>               
                    </div>
                    <div class="clearfix"> </div>   
                </div>
                <!-- //header-ends -->
                <!-- main content start-->




                <div id="page-wrapper">
                    
                    <?php
                        require_once("paginas/".$pag.'.php');
                     ?>

                </div>


            <!--footer-->
            <div class="footer">
               <p>&copy; Cálculos Judiciais. Todos os direitos reservados | Desenvolvido por Jonas Ferreira da Paixão</a></p>       
            </div>
            <!--//footer-->
            </div>
                
            <!-- new added graphs chart js-->
            
            <script src="js/Chart.bundle.js"></script>
            <script src="js/utils.js"></script>
            
            <script>
                var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                var color = Chart.helpers.color;
                var barChartData = {
                    labels: ["January", "February", "March", "April", "May", "June", "July"],
                    datasets: [{
                        label: 'Dataset 1',
                        backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                        borderColor: window.chartColors.red,
                        borderWidth: 1,
                        data: [
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor()
                        ]
                    }, {
                        label: 'Dataset 2',
                        backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
                        borderColor: window.chartColors.blue,
                        borderWidth: 1,
                        data: [
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor()
                        ]
                    }]

                };

                window.onload = function() {
                    var ctx = document.getElementById("canvas").getContext("2d");
                    window.myBar = new Chart(ctx, {
                        type: 'bar',
                        data: barChartData,
                        options: {
                            responsive: true,
                            legend: {
                                position: 'top',
                            },
                            title: {
                                display: true,
                                text: 'Chart.js Bar Chart'
                            }
                        }
                    });

                };

                document.getElementById('randomizeData').addEventListener('click', function() {
                    var zero = Math.random() < 0.2 ? true : false;
                    barChartData.datasets.forEach(function(dataset) {
                        dataset.data = dataset.data.map(function() {
                            return zero ? 0.0 : randomScalingFactor();
                        });

                    });
                    window.myBar.update();
                });

                var colorNames = Object.keys(window.chartColors);
                document.getElementById('addDataset').addEventListener('click', function() {
                    var colorName = colorNames[barChartData.datasets.length % colorNames.length];;
                    var dsColor = window.chartColors[colorName];
                    var newDataset = {
                        label: 'Dataset ' + barChartData.datasets.length,
                        backgroundColor: color(dsColor).alpha(0.5).rgbString(),
                        borderColor: dsColor,
                        borderWidth: 1,
                        data: []
                    };

                    for (var index = 0; index < barChartData.labels.length; ++index) {
                        newDataset.data.push(randomScalingFactor());
                    }

                    barChartData.datasets.push(newDataset);
                    window.myBar.update();
                });

                document.getElementById('addData').addEventListener('click', function() {
                    if (barChartData.datasets.length > 0) {
                        var month = MONTHS[barChartData.labels.length % MONTHS.length];
                        barChartData.labels.push(month);

                        for (var index = 0; index < barChartData.datasets.length; ++index) {
                            //window.myBar.addData(randomScalingFactor(), index);
                            barChartData.datasets[index].data.push(randomScalingFactor());
                        }

                        window.myBar.update();
                    }
                });

                document.getElementById('removeDataset').addEventListener('click', function() {
                    barChartData.datasets.splice(0, 1);
                    window.myBar.update();
                });

                document.getElementById('removeData').addEventListener('click', function() {
                    barChartData.labels.splice(-1, 1); // remove the label first

                    barChartData.datasets.forEach(function(dataset, datasetIndex) {
                        dataset.data.pop();
                    });

                    window.myBar.update();
                });
            </script>
            <!-- new added graphs chart js-->
            
            <!-- Classie --><!-- for toggle left push menu script -->
                <script src="js/classie.js"></script>
                <script>
                    var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
                        showLeftPush = document.getElementById( 'showLeftPush' ),
                        body = document.body;
                        
                    showLeftPush.onclick = function() {
                        classie.toggle( this, 'active' );
                        classie.toggle( body, 'cbp-spmenu-push-toright' );
                        classie.toggle( menuLeft, 'cbp-spmenu-open' );
                        disableOther( 'showLeftPush' );
                    };
                    

                    function disableOther( button ) {
                        if( button !== 'showLeftPush' ) {
                            classie.toggle( showLeftPush, 'disabled' );
                        }
                    }
                </script>
            <!-- //Classie --><!-- //for toggle left push menu script -->
                
            <!--scrolling js-->
            <script src="js/jquery.nicescroll.js"></script>
            <script src="js/scripts.js"></script>
            <!--//scrolling js-->
            
            <!-- side nav js -->
            <script src='js/SidebarNav.min.js' type='text/javascript'></script>
            <script>
              $('.sidebar-menu').SidebarNav()
            </script>
            <!-- //side nav js -->
            
            <!-- for index page weekly sales java script -->
            <script src="js/SimpleChart.js"></script>
            <script>
                var graphdata1 = {
                    linecolor: "#CCA300",
                    title: "Monday",
                    values: [
                    { X: "6:00", Y: 10.00 },
                    { X: "7:00", Y: 20.00 },
                    { X: "8:00", Y: 40.00 },
                    { X: "9:00", Y: 34.00 },
                    { X: "10:00", Y: 40.25 },
                    { X: "11:00", Y: 28.56 },
                    { X: "12:00", Y: 18.57 },
                    { X: "13:00", Y: 34.00 },
                    { X: "14:00", Y: 40.89 },
                    { X: "15:00", Y: 12.57 },
                    { X: "16:00", Y: 28.24 },
                    { X: "17:00", Y: 18.00 },
                    { X: "18:00", Y: 34.24 },
                    { X: "19:00", Y: 40.58 },
                    { X: "20:00", Y: 12.54 },
                    { X: "21:00", Y: 28.00 },
                    { X: "22:00", Y: 18.00 },
                    { X: "23:00", Y: 34.89 },
                    { X: "0:00", Y: 40.26 },
                    { X: "1:00", Y: 28.89 },
                    { X: "2:00", Y: 18.87 },
                    { X: "3:00", Y: 34.00 },
                    { X: "4:00", Y: 40.00 }
                    ]
                };
                var graphdata2 = {
                    linecolor: "#00CC66",
                    title: "Tuesday",
                    values: [
                      { X: "6:00", Y: 100.00 },
                    { X: "7:00", Y: 120.00 },
                    { X: "8:00", Y: 140.00 },
                    { X: "9:00", Y: 134.00 },
                    { X: "10:00", Y: 140.25 },
                    { X: "11:00", Y: 128.56 },
                    { X: "12:00", Y: 118.57 },
                    { X: "13:00", Y: 134.00 },
                    { X: "14:00", Y: 140.89 },
                    { X: "15:00", Y: 112.57 },
                    { X: "16:00", Y: 128.24 },
                    { X: "17:00", Y: 118.00 },
                    { X: "18:00", Y: 134.24 },
                    { X: "19:00", Y: 140.58 },
                    { X: "20:00", Y: 112.54 },
                    { X: "21:00", Y: 128.00 },
                    { X: "22:00", Y: 118.00 },
                    { X: "23:00", Y: 134.89 },
                    { X: "0:00", Y: 140.26 },
                    { X: "1:00", Y: 128.89 },
                    { X: "2:00", Y: 118.87 },
                    { X: "3:00", Y: 134.00 },
                    { X: "4:00", Y: 180.00 }
                    ]
                };
                var graphdata3 = {
                    linecolor: "#FF99CC",
                    title: "Wednesday",
                    values: [
                      { X: "6:00", Y: 230.00 },
                    { X: "7:00", Y: 210.00 },
                    { X: "8:00", Y: 214.00 },
                    { X: "9:00", Y: 234.00 },
                    { X: "10:00", Y: 247.25 },
                    { X: "11:00", Y: 218.56 },
                    { X: "12:00", Y: 268.57 },
                    { X: "13:00", Y: 274.00 },
                    { X: "14:00", Y: 280.89 },
                    { X: "15:00", Y: 242.57 },
                    { X: "16:00", Y: 298.24 },
                    { X: "17:00", Y: 208.00 },
                    { X: "18:00", Y: 214.24 },
                    { X: "19:00", Y: 214.58 },
                    { X: "20:00", Y: 211.54 },
                    { X: "21:00", Y: 248.00 },
                    { X: "22:00", Y: 258.00 },
                    { X: "23:00", Y: 234.89 },
                    { X: "0:00", Y: 210.26 },
                    { X: "1:00", Y: 248.89 },
                    { X: "2:00", Y: 238.87 },
                    { X: "3:00", Y: 264.00 },
                    { X: "4:00", Y: 270.00 }
                    ]
                };
                var graphdata4 = {
                    linecolor: "Random",
                    title: "Thursday",
                    values: [
                      { X: "6:00", Y: 300.00 },
                    { X: "7:00", Y: 410.98 },
                    { X: "8:00", Y: 310.00 },
                    { X: "9:00", Y: 314.00 },
                    { X: "10:00", Y: 310.25 },
                    { X: "11:00", Y: 318.56 },
                    { X: "12:00", Y: 318.57 },
                    { X: "13:00", Y: 314.00 },
                    { X: "14:00", Y: 310.89 },
                    { X: "15:00", Y: 512.57 },
                    { X: "16:00", Y: 318.24 },
                    { X: "17:00", Y: 318.00 },
                    { X: "18:00", Y: 314.24 },
                    { X: "19:00", Y: 310.58 },
                    { X: "20:00", Y: 312.54 },
                    { X: "21:00", Y: 318.00 },
                    { X: "22:00", Y: 318.00 },
                    { X: "23:00", Y: 314.89 },
                    { X: "0:00", Y: 310.26 },
                    { X: "1:00", Y: 318.89 },
                    { X: "2:00", Y: 518.87 },
                    { X: "3:00", Y: 314.00 },
                    { X: "4:00", Y: 310.00 }
                    ]
                };
                var Piedata = {
                    linecolor: "Random",
                    title: "Profit",
                    values: [
                      { X: "Monday", Y: 50.00 },
                    { X: "Tuesday", Y: 110.98 },
                    { X: "Wednesday", Y: 70.00 },
                    { X: "Thursday", Y: 204.00 },
                    { X: "Friday", Y: 80.25 },
                    { X: "Saturday", Y: 38.56 },
                    { X: "Sunday", Y: 98.57 }
                    ]
                };
                $(function () {
                    $("#Bargraph").SimpleChart({
                        ChartType: "Bar",
                        toolwidth: "50",
                        toolheight: "25",
                        axiscolor: "#E6E6E6",
                        textcolor: "#6E6E6E",
                        showlegends: true,
                        data: [graphdata4, graphdata3, graphdata2, graphdata1],
                        legendsize: "140",
                        legendposition: 'bottom',
                        xaxislabel: 'Hours',
                        title: 'Weekly Profit',
                        yaxislabel: 'Profit in $'
                    });
                    $("#sltchartype").on('change', function () {
                        $("#Bargraph").SimpleChart('ChartType', $(this).val());
                        $("#Bargraph").SimpleChart('reload', 'true');
                    });
                    $("#Hybridgraph").SimpleChart({
                        ChartType: "Hybrid",
                        toolwidth: "50",
                        toolheight: "25",
                        axiscolor: "#E6E6E6",
                        textcolor: "#6E6E6E",
                        showlegends: true,
                        data: [graphdata4],
                        legendsize: "140",
                        legendposition: 'bottom',
                        xaxislabel: 'Hours',
                        title: 'Weekly Profit',
                        yaxislabel: 'Profit in $'
                    });
                    $("#Linegraph").SimpleChart({
                        ChartType: "Line",
                        toolwidth: "50",
                        toolheight: "25",
                        axiscolor: "#E6E6E6",
                        textcolor: "#6E6E6E",
                        showlegends: false,
                        data: [graphdata4, graphdata3, graphdata2, graphdata1],
                        legendsize: "140",
                        legendposition: 'bottom',
                        xaxislabel: 'Hours',
                        title: 'Weekly Profit',
                        yaxislabel: 'Profit in $'
                    });
                    $("#Areagraph").SimpleChart({
                        ChartType: "Area",
                        toolwidth: "50",
                        toolheight: "25",
                        axiscolor: "#E6E6E6",
                        textcolor: "#6E6E6E",
                        showlegends: true,
                        data: [graphdata4, graphdata3, graphdata2, graphdata1],
                        legendsize: "140",
                        legendposition: 'bottom',
                        xaxislabel: 'Hours',
                        title: 'Weekly Profit',
                        yaxislabel: 'Profit in $'
                    });
                    $("#Scatterredgraph").SimpleChart({
                        ChartType: "Scattered",
                        toolwidth: "50",
                        toolheight: "25",
                        axiscolor: "#E6E6E6",
                        textcolor: "#6E6E6E",
                        showlegends: true,
                        data: [graphdata4, graphdata3, graphdata2, graphdata1],
                        legendsize: "140",
                        legendposition: 'bottom',
                        xaxislabel: 'Hours',
                        title: 'Weekly Profit',
                        yaxislabel: 'Profit in $'
                    });
                    $("#Piegraph").SimpleChart({
                        ChartType: "Pie",
                        toolwidth: "50",
                        toolheight: "25",
                        axiscolor: "#E6E6E6",
                        textcolor: "#6E6E6E",
                        showlegends: true,
                        showpielables: true,
                        data: [Piedata],
                        legendsize: "250",
                        legendposition: 'right',
                        xaxislabel: 'Hours',
                        title: 'Weekly Profit',
                        yaxislabel: 'Profit in $'
                    });

                    $("#Stackedbargraph").SimpleChart({
                        ChartType: "Stacked",
                        toolwidth: "50",
                        toolheight: "25",
                        axiscolor: "#E6E6E6",
                        textcolor: "#6E6E6E",
                        showlegends: true,
                        data: [graphdata3, graphdata2, graphdata1],
                        legendsize: "140",
                        legendposition: 'bottom',
                        xaxislabel: 'Hours',
                        title: 'Weekly Profit',
                        yaxislabel: 'Profit in $'
                    });

                    $("#StackedHybridbargraph").SimpleChart({
                        ChartType: "StackedHybrid",
                        toolwidth: "50",
                        toolheight: "25",
                        axiscolor: "#E6E6E6",
                        textcolor: "#6E6E6E",
                        showlegends: true,
                        data: [graphdata3, graphdata2, graphdata1],
                        legendsize: "140",
                        legendposition: 'bottom',
                        xaxislabel: 'Hours',
                        title: 'Weekly Profit',
                        yaxislabel: 'Profit in $'
                    });
                });

            </script>
            <!-- //for index page weekly sales java script -->
            
            
            <!-- Bootstrap Core JavaScript -->
           <script src="js/bootstrap.js"> </script>
            <!-- //Bootstrap Core JavaScript -->
            
        </body>
        </html>


        <div class="modal fade" id="modalPerfil" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar perfil</h5>
                <button id="btn-fechar-perfil" type="button" class="close" data-dismiss="modal"
                    aria-label="Close" style = "margin-top: -20px">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="post" id = "form-perfil">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nome</label>
                        <input type="text" class="form-control" id="nome-perfil" name="nome" placeholder="Digite o nome" value="<?php echo$nome_usuario ?>" required>                    
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="email-perfil" name="email" placeholder="Digite o email" value="<?php echo $email_usuario ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Matricula</label>
                        <input type="text" class="form-control" id="matricula-perfil" name="matricula" placeholder="Digite a matricula" value="<?php echo $matricula_usuario ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Senha</label>
                        <input type="password" class="form-control" id="senha-perfil" name="senha" placeholder="Digite a senha" value="<?php echo $senha_usuario?>" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Confirmar senha</label>
                        <input type="password" class="form-control" id="conf-senha-perfil" name="conf_senha" placeholder="Confirmar a senha" required>
                    </div>            
                                     
                    <input type="hidden" name = "id" value="<?php echo $id_usuario ?>">

                <small><div id="mensagem-perfil" align="center"></div></small>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Editar perfil</button>
                </div>
            </form>
            
        </div>
    </div>
</div>


<script type="text/javascript">
    $("#form-perfil").submit(function () {
    
        event.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            url: "editar_perfil.php",
            type: 'POST',
            data: formData,

            success: function (mensagem) {
                $('#mensagem-perfil').text('');
                $('#mensagem-perfil').removeClass()
                if (mensagem.trim() == "Editado com Sucesso") {
                    $('#btn-fechar-perfil').click();
                    location.reload();
                   
                } else {

                    $('#mensagem-perfil').addClass('text-danger')
                    $('#mensagem-perfil').text(mensagem)
                }
            },

            cache: false,
            contentType: false,
            processData: false,

        });
    });
</script>