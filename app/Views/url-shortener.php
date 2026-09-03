<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Shortener</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer">

    
    <!-- <link rel="stylesheet" href="<?php # echo base_url('style.css'); ?>"> -->
    <?php #echo link_tag('style.css') 
        echo link_tag(base_url("style.css"));
    ?>
</head>
<body>
    
    <div class="container">

        <div class="brand-icon" aria-hidden="true">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/>
                <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/>
            </svg>
        </div>
        <h1>URL Shortener</h1>
        <p class="subtitle">Turn long, messy links into clean and shareable URLs in a single click.</p>

        <form action="<?php echo base_url('url-shortener') ?>" method="post" id="frm_url">

            <label for="long_url">Paste your long URL</label>
            <div class="input-group">
                <input type="text" name="long_url" id="long_url" placeholder="https://example.com/your-very-long-link" autocomplete="url" required>
                <button type="submit" id="shorten-btn">Shorten URL</button>
            </div>
        </form>
        
        <div id="short-url-container" style="<?php echo $display ?>">

            <p>Here's your shortened URL:</p>
            <div id="short-url">
                <a href="<?php echo $longurl; ?>" target="_blank" rel="noopener noreferrer"><?php echo base_url($shortcode); ?></a>
                
                <button type="button" id="copy-btn" aria-label="Copy shortened URL" title="Copy URL">
                    <!-- <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect width="14" height="14" x="8" y="8" rx="2"/>
                        <path d="M16 8V6a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2"/>
                    </svg> -->
                    <i class="fa fa-copy"></i>
                </button>
            </div>

        </div>
    </div>

    <!-- with the link js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/4.0.0/jquery.min.js" integrity="sha512-8LENNbXmzI/Gbj+OwXmqR6V4QaUAw0/porPzy1+dQoJqC0JPHedWoe0DDOTL2uHA5XXJyIsPtiMHH86pVlay6A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.22.1/jquery.validate.min.js" integrity="sha512-qu7dMuIm2f0KcKZ3BOoP4c+Hn+r4E8PbD2Ro4rmKsOyheCxcwhzQpf6SojA76dn+owqfANzfTFUTkGA+HpHjOA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- If the file is downloaded and saved in public -->
    <?php # echo script_tag('script.js'); ?>

    <script>
        $(function(){
            $("#copy-btn").on("click", function(){
                navigator.clipboard.writeText($("#short-url a").text()).then(()=> {
                    toastr.success("Success, URL Copied");
                })
            });

            // Validation
            $("#frm_url").validate();
        })
    </script>

</body>
</html>
