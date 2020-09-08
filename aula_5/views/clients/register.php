<h2>Registro de Clientes</h2>
<br>

<form action="?controller=clients&action=registerView" method="post">

    <div class="form-group d-flex justify-content-between">
        <label>Nome</label>
        <input type="text" name="name" class="form-control">
    </div>

    <div class="form-group d-flex justify-content-between">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="form-group d-flex justify-content-between">
        <label>Telefone</label>
        <input type="tel" name="phone" class="form-control">
    </div>

    <div class="form-group d-flex justify-content-between">
        <label>Interesse</label>
        <input type="text" name="interest" class="form-control">
    </div>
    <input type="submit" value="register">
</form>