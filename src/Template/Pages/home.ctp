<div class="row">
    <div class="columns large-12 text-center">
        <h1>Muffin Webservice Example Application</h1>
    </div>
</div>

<div class="row">
    <div class="columns large-3 large-offset-3 text-center">
        <p><?= $this->Html->link('Single item request', ['controller' => 'Answers', 'action' => 'view'], ['class' => 'button']);?></p>
    </div>
    <div class="columns large-3 text-center">
        <p><?= $this->Html->link('Multiple item request', ['controller' => 'BankHolidays', 'action' => 'index'], ['class' => 'button']);?></p>
    </div>
    <div class="columns large-3"><!-- Zurb foundation is not as good with column offsets as Twitter Bootstrap --></div>
</div>

