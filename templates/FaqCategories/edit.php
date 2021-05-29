<?php
/**
 * @var \App\View\AppView $this
 * @var \Faq\Model\Entity\FaqCategory $faqCategory
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $faqCategory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $faqCategory->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Faq Categories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="faqCategories form content">
            <?= $this->Form->create($faqCategory) ?>
            <fieldset>
                <legend><?= __('Edit Faq Category') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('sort_seq');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
