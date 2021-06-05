<?php
/**
 * @var \App\View\AppView $this
 * @var \Faq\Model\Entity\FaqCategory[] $faqCategories
 */
?>
<div class="faqCategories index content">
    <?= $this->Html->link(__('New Faq Category'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Faq Categories') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('sort_seq') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($faqCategories as $faqCategory) : ?>
                <tr>
                    <td><?= $this->Number->format($faqCategory->id) ?></td>
                    <td><?= h($faqCategory->name) ?></td>
                    <td><?= $this->Number->format($faqCategory->sort_seq) ?></td>
                    <td><?= h($faqCategory->created) ?></td>
                    <td><?= h($faqCategory->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $faqCategory->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $faqCategory->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $faqCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $faqCategory->id)]) ?>
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
