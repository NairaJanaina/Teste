<body style="background-color:#4682B4	"> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<form action="tarefaInserir.php" method="POST" class="row g-4 needs-validation" novalidate>
  <div class="col-md-6 offset-md-4" style="background-color:#fff; margin-top: 8%; width:29%; border-radius:25px;">

  <div class="col-md-6 offset-md-3" style="padding-top:10%" >
  <h5><label for="validationCustom01"  class="col-md-6 offset-md-3">CADASTRAR</label></h5>

  <label for="validationCustom01" class="form-label">Nome</label>
    <input type="text" class="form-control" id="validationCustom01" name ="nome"required>
    <div class="valid-feedback">
    </div>
  </div>
  <div class="col-md-6 offset-md-3">
    <label for="validationCustom02" class="form-label">Descrição</label>
    <input type="text" class="form-control" name ="descricao" id="validationCustom02" required>
    <div class="valid-feedback">
    </div>
  </div>
  <div class="col-md-6 offset-md-3">
    <label for="validationCustomUsername" class="form-label">Prazo</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">📅</span>
      <input type="date" name ="prazo">
      <div class="invalid-feedback">
      </div>
    </div>
  </div>
  
  <div class="col-md-6 offset-md-3">
    <label for="validationCustom04" class="form-label">Prioridade da tarefa</label>
    <select class="form-select" id="validationCustom04" name ="prioridade" required>
      <option selected disabled>escolha uma opção</option>
      <option>Muito alta</option>
      <option>Alta</option>
      <option>Média</option>
      <option>Baixa</option>
    </select>
    <div class="invalid-feedback">
    </div>
  </div><br>
  
  <div class="col-md-6 offset-md-3" style="padding-bottom:8%"> 
    <button class="btn btn-primary" type="submit">Criar</button>
    <button type="button" class="btn btn-outline-primary">Limpar</button>
  </div><br>
  </div>
</form>
</div>
</body>