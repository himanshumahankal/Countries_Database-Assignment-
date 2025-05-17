<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Country> $countries
 */
?>
<div class="countries index content">
    <?= $this->Html->link(__('New Country'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Countries') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('currency') ?></th>
                    <th><?= $this->Paginator->sort('unicode_flag') ?></th>
                    <th><?= $this->Paginator->sort('flag') ?></th>
                    <th><?= $this->Paginator->sort('dial_code') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('updated_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($countries as $country): ?>
                <tr>
                    <td><?= $this->Number->format($country->id) ?></td>
                    <td><?= h($country->name) ?></td>
                    <td><?= h($country->currency) ?></td>
                    <td><?= h($country->unicode_flag) ?></td>
                    <td><?= h($country->flag) ?></td>
                    <td><?= h($country->dial_code) ?></td>
                    <td><?= h($country->created_at) ?></td>
                    <td><?= h($country->updated_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $country->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $country->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $country->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $country->id),
                            ]
                        ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>