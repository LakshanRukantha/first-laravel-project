@props(['type' => 'a'])

<?php if($type === 'a') : ?>
<a {{ $attributes }}>{{ $slot }}</a>
<?php else : ?>
<button {{ $attributes }}>{{ $slot }}</button>
<?php endif; ?>
