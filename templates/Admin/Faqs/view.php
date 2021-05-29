<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $faq
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Faq'), ['action' => 'edit', $faq->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Faq'), ['action' => 'delete', $faq->id], ['confirm' => __('Are you sure you want to delete # {0}?', $faq->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Faqs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Faq'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="faqs view content">
            <h3><?= h($faq->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Question') ?></th>
                    <td><?= h($faq->question) ?></td>
                </tr>
                <tr>
                    <th><?= __('Answer') ?></th>
                    <td><?= h($faq->answer) ?></td>
                </tr>
                <tr>
                    <th><?= __('Faq Category') ?></th>
                    <td><?= $faq->has('faq_category') ? $this->Html->link($faq->faq_category->name, ['controller' => 'FaqCategories', 'action' => 'view', $faq->faq_category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($faq->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sort Seq') ?></th>
                    <td><?= $this->Number->format($faq->sort_seq) ?></td>
                </tr>
                <tr>
                    <th><?= __('Open Period From') ?></th>
                    <td><?= h($faq->open_period_from) ?></td>
                </tr>
                <tr>
                    <th><?= __('Open Period To') ?></th>
                    <td><?= h($faq->open_period_to) ?></td>
                </tr>
                <tr>
                    <th><?= __('When Write') ?></th>
                    <td><?= h($faq->when_write) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($faq->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($faq->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
