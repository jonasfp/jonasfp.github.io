<?php 

@session_start();
require_once('verificar.php');
require_once('../conexao.php');

$pag = 'calculos_civeis';

?>

<!-- Mascaras JS -->
<script src="js/mascaras.js"></script>

<!-- Ajax para funcionar Mascaras JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script> 

<form method="post" id="formCiveis">

<table class="table table-hover">
    <thead>
        <tr>
          <th class="text-left" style="width:15%">NÚMERO DO PROCESSO </th>
          <th class="text-left" style="width:15%">VARA</th>          
          <th class="text-left" style="width:10%">EXEQUENTE</th>
          <th class="text-left" style="width:10%">EXECUTADO</th>        
          

      </tr>
    </thead>
  
  <tbody>
    <tr>
    
    <td>

        <input type="text" class="form-control" id="processo" name="processo" placeholder="Número do processo">             
    </td>

    <td>

        <input type="text" class="form-control" id="vara" name="vara" placeholder="Vara">             
    </td>

    <td>

        <input type="text" class="form-control" id="exequente" name="exequente" placeholder="Exequente">             
    </td>

    <td>

        <input type="text" class="form-control" id="executado" name="executado" placeholder="Executado">             
    </td>

       
</tr>

</tbody>
</table>




<table class="table" >
    <thead>
        <tr>

          <th class="text-left" style="">TERMO FINAL DA CORREÇÃO MONETÁRIA </th>
          <th class="text-left" style="">TERMO INICIAL DOS JUROS DE MORA</th>      <th class="text-left" style="">TERMO FINAL DOS JUROS DE MORA</th>               

      </tr>
    </thead>
  
  <tbody>             
    
    <tr>

    <td>

    <div class="md-form md-outline input-with-post-icon datepicker">
    <input placeholder="Data final" type="date" id="datainicialcorrecao" name="datainicialcorrecao" class="form-control"></div>    

    </td>

    <td>

    <div class="md-form md-outline input-with-post-icon datepicker">
    <input placeholder="Data inicial" type="date" id="datainicialjuros" name="datainicialjuros" class="form-control"></div>
    
    </td>

    <td>

    <div class="md-form md-outline input-with-post-icon datepicker">
    <input placeholder="Data final" type="date" id="datafinaljuros" name="datafinaljuros" class="form-control"></div>
           
    </td>

    </tr>

    </tbody>

</table>



<table class="table table-hover" id="jonas">
    <thead>
        <tr>
          
          <th class="text-left" style="width:8%">DATA</th>
          <th class="text-left">HISTÓRICO</th>
          <th class="text-left" style="width:10%">VALOR</th>
          <th class="text-left" style="width:15%">CORREÇÃO MONETÁRIA</th>
          <th class="text-left" style="width:15%">JUROS MORATÓRIOS</th>
          <th class="text-left" style="width:15%">TOTAL</th>
          <th class="text-center" style="width:10%">AÇÃO</th>

      </tr>
    </thead>
  
  

<tbody id="modelo-linha">

<tr class="linha-lancamento">  
    
        <td>

    <div class="md-form md-outline input-with-post-icon datepicker">
    <input placeholder="Data" type="date" id="dataevento" name="dataevento" class="form-control"></div>
                      
        </td>

        <td>

            <input type="text" class="form-control" id="historico" name="historico" placeholder="Histórico">             
        </td>

        <td>

            <input type="text" class="form-control" id="valor" name="valor" placeholder="Valor">             
        </td>

        <td>

            <input type="text" class="form-control" id="indicecorrecao" name="indicecorrecao" placeholder="Correção Monetária">             
        </td>
        
        <td>

            <input type="text" class="form-control" id="juros" name="juros" placeholder="Juros Moratórios">             
        </td>

        <td>

            <input type="text" class="form-control" id="total" name="total" placeholder="Total">             
        </td>

    <td>
      
<div class="btn-group btn-group-sm">
<button type="button" form="formCiveis" id="inserirLinha" name="inserirLinha"><i class="fa fa-plus" aria-hidden="true" title="Inserir linha"></i></button>
</div>

<div class="btn-group btn-group-sm">
<button type="button" form="formCiveis" id="atualizarLinha"><i class="fa fa-refresh" aria-hidden="true" title="Atualizar linha"></i></button>    
</div>

<div class="btn-group btn-group-sm">
<button type="button" form="formCiveis" id="removerLinha" ><i class="fa fa-minus" aria-hidden="true" title="Remover linha"></i></button>
</div>
<div class="btn-group btn-group-sm">
<button type="submit" id="salvarLinha" class="salvarLinha"><i class="fa fa-save" title="Salvar linha"></i></button>
</div>
    
</td>
  

</tbody>
</table>


<input type="hidden" name = "id">

<small><div id="mensagem" align="center"></div></small>

<div class="modal-footer">

<button type="submit" id="salvar" class="btn btn-primary">Salvar</button>

</div>

</form>



<script src="https://code.jquery.com/jquery-3.5.0.js"></script>

<script type="text/javascript">

    var pag = "<?=$pag?>"  
   
</script>

<script src = "js/ajax2.js"></script>

<script>

     var count = 1
    
$('#jonas').on('click','#inserirLinha', function () {

   count++
   
    $(this).closest(".linha-lancamento").after('<tr id = "campo'+count+'" class = "linha-lancamento"> <td> <div class="md-form md-outline input-with-post-icon datepicker"> <input placeholder="Data" type="date" id="dataevento" name="dataevento" class="form-control"></div> </td> <td><input type="text" class="form-control" id="historico" name="historico" placeholder="Histórico"></td> <td><input type="text" class="form-control" id="valor" name="valor" placeholder="Valor"></td> <td><input type="text" class="form-control" id="indicecorrecao" name="indicecorrecao" placeholder="Correção Monetária"></td> <td><input type="text" class="form-control" id="juros" name="juros" placeholder="Juros Moratórios"></td> <td><input type="text" class="form-control" id="total" name="total" placeholder="Total"></td> <td><div class="btn-group btn-group-sm"><button type="button" id="inserirLinha"><i class="fa fa-plus" aria-hidden="true"></i></button></div> <div class="btn-group btn-group-sm"><button type="button" id="atualizarLinha"><i class="fa fa-refresh" aria-hidden="true"></i></button></div> <div class="btn-group btn-group-sm"><button type="button" id = "'+count+'"class= "removerLinha" ><i class="fa fa-minus" aria-hidden="true"></i></button></div> <div class="btn-group btn-group-sm"><button type="submit" id="salvarLinha" class = "salvarLinha"><i class="fa fa-save"></i></button></div></td></tr>')
            
});

$('#jonas').on('click','.removerLinha',function(){
    var button_id = $(this).attr("id")
    $('#campo'+button_id).remove()
})


</script>





