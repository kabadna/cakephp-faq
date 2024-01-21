<?php
/**
 * @var \App\View\AppView $this
 * @var \Faq\Model\Entity\Faq[] $faqs
 */
?>
<div class="faqs index content">
    <?= $this->Html->link(__('New Faq'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Faqs') ?>(User)</h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('question') ?></th>
                    <th><?= $this->Paginator->sort('answer') ?></th>
                    <th><?= $this->Paginator->sort('open_period_from') ?></th>
                    <th><?= $this->Paginator->sort('open_period_to') ?></th>
                    <th><?= $this->Paginator->sort('faq_category_id') ?></th>
                    <th><?= $this->Paginator->sort('when_write') ?></th>
                    <th><?= $this->Paginator->sort('sort_seq') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($faqs as $faq) : ?>
                <tr>
                    <td><?= $this->Number->format($faq->id) ?></td>
                    <td><?= h($faq->question) ?></td>
                    <td><?= h($faq->answer) ?></td>
                    <td><?= h($faq->open_period_from) ?></td>
                    <td><?= h($faq->open_period_to) ?></td>
                    <td><?= $faq->has('faq_category') ? $this->Html->link($faq->faq_category->name, ['controller' => 'FaqCategories', 'action' => 'view', $faq->faq_category->id]) : '' ?></td>
                    <td><?= h($faq->when_write) ?></td>
                    <td><?= $this->Number->format($faq->sort_seq) ?></td>
                    <td><?= h($faq->created) ?></td>
                    <td><?= h($faq->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $faq->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $faq->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $faq->id], ['confirm' => __('Are you sure you want to delete # {0}?', $faq->id)]) ?>
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
