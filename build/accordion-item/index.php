<?php
$headingText = $attributes['headingText'] ?? 'No text entered for this field.';
$panelText = $attributes['panelText'] ?? 'No text entered for this field.';
$editorId = $attributes['editorId'] ?? 'No id found.';
$index = $attributes['itemIndex'] ?? 'No index found.';
$firstItemInitiallyOpen = $attributes['parentAttributes']['firstItemInitiallyOpen'] ?? null;
$oneItemOpen = $attributes['parentAttributes']['oneItemOpen'] ?? null;

$itemIsExpanded = $firstItemInitiallyOpen && ($index == 0) ? 'true' : 'false';
?>

<?php 
  error_log( print_r($attributes, TRUE) );
?>

<?php if ($oneItemOpen) : ?>
  <div x-id="['diesel-accordion-item']" :id="$id('diesel-accordion-item')" class="diesel-block-accordion-item">
    <h2 role="button" :aria-expanded="dieselBlockAccordionItemActive == <?php echo $index; ?>" :aria-controls="$id('diesel-accordion-item')" class="diesel-block-accordion-item__heading" @click="dieselBlockAccordionItemActive = <?php echo $index; ?>">
      <?php echo $headingText; ?>
    </h2>
    <div class="diesel-block-accordion-item__panel" :aria-labelledby="$id('diesel-accordion-item')" x-show="dieselBlockAccordionItemActive == <?php echo $index; ?>" x-collapse :aria-hidden="dieselBlockAccordionItemActive == <?php echo $index; ?> ? 'false' : 'true'" role="region">
      <?php echo $panelText; ?>
    </div>
  </div>
<?php else : ?>
  <div x-id="['diesel-accordion-item']" x-data="{ expanded: <?php echo $itemIsExpanded; ?> }" :id="$id('diesel-accordion-item')" class="diesel-block-accordion-item">
    <h2 role="button" :aria-expanded="expanded" :aria-controls="$id('diesel-accordion-item')" class="diesel-block-accordion-item__heading" @click="expanded = !expanded">
      <?php echo $headingText; ?>
    </h2>
    <div class="diesel-block-accordion-item__panel" :aria-labelledby="$id('diesel-accordion-item')" x-show="expanded" x-collapse :aria-hidden="expanded ? 'false' : 'true'" role="region">
      <?php echo $panelText; ?>
    </div>
  </div>
<?php endif; ?>