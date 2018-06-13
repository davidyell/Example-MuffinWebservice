<div class="row">
    <div class="columns large-centered large-4">
        <h1 class="text-center"><?= ucwords($answer->get('answer'));?></h1>
    </div>
</div>

<div class="row">
    <div class="columns large-centered large-4 text-center">
        <?= $this->Html->image($answer->get('image'));?>
    </div>
</div>
