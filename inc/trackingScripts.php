<?php

function openx_google_analytics() { ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KWHEE0BDWP"></script>
    <script type="text/javascript">
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-KWHEE0BDWP');
    </script>
<?php
}

add_action('wp_head','openx_google_analytics', 20);



function openx_facebook_pixel() { ?>

    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '4980434348672488');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=4980434348672488&ev=PageView&noscript=1"
    /></noscript>

<?php

}

add_action('wp_head','openx_facebook_pixel', 20);


function openx_linkedin_insight() { ?>
    <script type="text/javascript">
        _linkedin_partner_id = "3956196";
        window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
        window._linkedin_data_partner_ids.push(_linkedin_partner_id);
        </script><script type="text/javascript">
        (function(l) {
        if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])};
        window.lintrk.q=[]}
        var s = document.getElementsByTagName("script")[0];
        var b = document.createElement("script");
        b.type = "text/javascript";b.async = true;
        b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
        s.parentNode.insertBefore(b, s);})(window.lintrk);
        </script>
        <noscript>
        <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=3956196&fmt=gif" />
    </noscript>
<?php
}

add_action('wp_footer','openx_linkedin_insight', 20);