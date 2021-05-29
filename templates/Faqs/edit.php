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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $faq->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $faq->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Faqs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="faqs form content">
            <?= $this->Form->create($faq) ?>
            <fieldset>
                <legend><?= __('Edit Faq') ?></legend>
                <?php
                    echo $this->Form->control('question');
                    echo $this->Form->control('answer');
                    echo $this->Form->control('open_period_from');
                    echo $this->Form->control('open_period_to');
                    echo $this->Form->control('faq_category_id', ['options' => $faqCategories, 'empty' => true]);
                    echo $this->Form->control('when_write', ['empty' => true]);
                    echo $this->Form->control('sort_seq');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
