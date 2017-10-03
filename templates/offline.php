<?php $this->layout('base', ['title' => $host.' is offline']) ?>

<div class="status-header">
    <h1 class="title"><i class="status offline fa fa-circle"></i> <?= $this->e($host) ?></h1>
    <h2 class="subtitle">Unreachable</h2>
</div>

<div class="status-hero">
    <h3><i class="offline fa fa-warning"></i> <?= $this->e($host) ?> seems offline.</h3>
</div>
