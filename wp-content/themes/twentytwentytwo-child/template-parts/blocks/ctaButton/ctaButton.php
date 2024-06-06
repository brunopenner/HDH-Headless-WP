<?php
$blockName = "cta-button";
$label = get_field('label');
$destination = get_field('destination');
$alignment = get_field('alignment');

?>
<div class="<?php echo $blockName . '-' . $alignment; ?>">
    <div class="<?php echo $blockName ?>">
        <?php echo $label ?>
    </div>
</div>

<style>
    .<?php echo $blockName; ?> {
        padding: 5px 10px;
        border-radius: 5px;
        color: white;
        font-weight: bold;
        display: inline-block;
        background: #ec489a;
    }

    .<?php echo $blockName . '-' . $alignment; ?> {
        text-align:
            <?php echo $alignment ?>;
    }
</style>