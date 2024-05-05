<!-- item.php -->
<?php
$protocol = 'https';
$domain = 'cvc';
?>


<div class="tooltip tooltip-bottom" data-tip=<?php echo $carpeta; ?>>
    <a href="<?php echo $protocol . '://' . $carpeta . '.' . $domain; ?>" target="_blank">
        <div class="w-full">
            <svg class="fill-green-500 hover:fill-green-700 transition ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path d="M64 480H448c35.3 0 64-28.7 64-64V160c0-35.3-28.7-64-64-64H288c-10.1 0-19.6-4.7-25.6-12.8L243.2 57.6C231.1 41.5 212.1 32 192 32H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64z" />
            </svg>
            <h2 class="text-sm sm:text-base md:text-lg lg:text-xl font-semibold text-ellipsis  overflow-hidden"><?php echo $carpeta; ?></h2>
            <h3 class="text-xs md:text-sm font-light text-ellipsis  overflow-hidden text-gray-400"><?php echo $protocol . '://' . $carpeta . '.' . $domain; ?></h3>
        </div>
    </a>
</div>