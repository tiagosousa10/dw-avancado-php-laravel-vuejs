<h3>Fornecedores</h3>







@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>

@elseif(count($fornecedores) >= 10)
    <h3>Existem muitos fornecedores cadastrados</h3>
@else
    <h3>Nao Existem fornecedores cadastrados</h3>
@endif
