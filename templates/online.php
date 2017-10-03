<?php $this->layout('base', ['title' => $host.' is online']) ?>

<div class="status-header">
    <h1 class="title"><i class="status online fa fa-circle"></i> <?= $this->e($host) ?></h1>
    <h2 class="subtitle"><?= $this->e($description['text']) ?></h2>
</div>

<div class="status-list">
    <div class="label"><i class="fa fa-server"></i> Server stats</div>
    <table class="table">
        <tbody>
        <tr>
            <td>Version</td>
            <td><?= $this->e($version['name']) ?></td>
        </tr>
        <tr>
            <td>Protocol</td>
            <td><?= $this->e($version['protocol']) ?></td>
        </tr>
        </tbody>
    </table>
</div>
<div class="status-list">
    <div class="players">
        <div class="label"><i class="fa fa-users"></i> Players online</div>
        <div class="bar">
            <progress class="progress" value="<?= $this->e($players['percentage']) ?>" max="100"><?= $this->e($players['percentage']) ?>%</progress>
        </div>
        <div class="amount has-text-centered"><?= $this->e($players['online']) ?>/<?= $this->e($players['max']) ?></div>
    </div>
</div>
