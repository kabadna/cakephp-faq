<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $faqCategory
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Faq Category'), ['action' => 'edit', $faqCategory->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Faq Category'), ['action' => 'delete', $faqCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $faqCategory->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Faq Categories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Faq Category'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="faqCategories view content">
            <h3><?= h($faqCategory->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($faqCategory->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($faqCategory->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sort Seq') ?></th>
                    <td><?= $this->Number->format($faqCategory->sort_seq) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($faqCategory->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($faqCategory->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Faqs') ?></h4>
                <?php if (!empty($faqCategory->faqs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Question') ?></th>
                            <th><?= __('Answer') ?></th>
                            <th><?= __('Open Period From') ?></th>
                            <th><?= __('Open Period To') ?></th>
                            <th><?= __('Faq Category Id') ?></th>
                            <th><?= __('When') ?></th>
                            <th><?= __('Sort Seq') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($faqCategory->faqs as $faqs) : ?>
                        <tr>
                            <td><?= h($faqs->id) ?></td>
                            <td><?= h($faqs->question) ?></td>
                            <td><?= h($faqs->answer) ?></td>
                            <td><?= h($faqs->open_period_from) ?></td>
                            <td><?= h($faqs->open_period_to) ?></td>
                            <td><?= h($faqs->faq_category_id) ?></td>
                            <td><?= h($faqs->when) ?></td>
                            <td><?= h($faqs->sort_seq) ?></td>
                            <td><?= h($faqs->created) ?></td>
                            <td><?= h($faqs->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Faqs', 'action' => 'view', $faqs->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Faqs', 'action' => 'edit', $faqs->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Faqs', 'action' => 'delete', $faqs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $faqs->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
