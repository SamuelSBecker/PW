<h2>Registro de Clientes</h2>

<form action="?controller=clients&action=registerView" method="post">

    <div class="form-group">
        <label>Nome</label>
        <input type="text" name="name" class="form-control">
    </div>

    <div class="form-group">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label>Telefone</label>
        <input type="tel" name="phone" class="form-control">
    </div>

    <div class="form-group">
        <label>Interesse</label>
        <input type="text" name="interest" class="form-control">
    </div>
    <br>
    <br>
    <input type="submit" value="register">
</form>