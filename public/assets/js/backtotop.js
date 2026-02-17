/* Back to top progress circle */
(function ($) {
    "use strict";

    $(".switch").on("click", function () {
        if ($("body").hasClass("light")) {
            $("body").removeClass("light");
            $(".switch").removeClass("switched");
        } else {
            $("body").addClass("light");
            $(".switch").addClass("switched");
        }
    });

    $(document).ready(function () {
        var progressPath = document.querySelector(".progress-wrap path");
        var progressWrap = $(".progress-wrap");

        // Some pages don't render the progress circle. Skip setup safely.
        if (!progressPath || !progressWrap.length || typeof progressPath.getTotalLength !== "function") {
            return;
        }

        var pathLength = progressPath.getTotalLength();
        progressPath.style.transition = progressPath.style.WebkitTransition = "none";
        progressPath.style.strokeDasharray = pathLength + " " + pathLength;
        progressPath.style.strokeDashoffset = pathLength;
        progressPath.getBoundingClientRect();
        progressPath.style.transition = progressPath.style.WebkitTransition = "stroke-dashoffset 10ms linear";

        var updateProgress = function () {
            var scrollTop = $(window).scrollTop();
            var docHeight = $(document).height() - $(window).height();
            var progress = pathLength;

            if (docHeight > 0) {
                progress = pathLength - (scrollTop * pathLength) / docHeight;
            }
            progressPath.style.strokeDashoffset = progress;
        };

        updateProgress();
        $(window).on("scroll", updateProgress);

        $(window).on("scroll", function () {
            if ($(this).scrollTop() > 50) {
                progressWrap.addClass("active-progress");
            } else {
                progressWrap.removeClass("active-progress");
            }
        });

        progressWrap.on("click", function (e) {
            e.preventDefault();
            $("html, body").animate({ scrollTop: 0 }, 550);
            return false;
        });
    });
})(jQuery);
