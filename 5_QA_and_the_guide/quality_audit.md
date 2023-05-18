# Quality Audit

The quality audit performed went well there was some remidiation along the way and a few issues we couldnt resolve but mostly this returned that we had optomised code that performed well. 

## HTML Validation


Report pre validation

<img src="sp5-media/htmlvalidation.jpg" alt="html pre validation" width="1000">

This first screenshot shows the index pre fix with numerous issues, this was later resolved and now has two warnings one for a language tag as this allows us to reach consumers who only wnats results from their native languags and another warning in the contact form which we will look to resolve but didnt have time in this sprint. There was one point for a stray footer tag which we couldnt identify and seemed to be fine when reading through the code so ignored this. Finally there was an div closing tag which was reported however, if removed this left the class open to not format correctly so was ignored again. 

One example is the broken URLs we didnt know existed as below which was resolved using checkbot. 

<img src="sp5-media/brokenurl.jpg" alt="broken url pre fix" width="1000">

Fixed however there is a robot.txt which we couldnt find.

<img src="sp5-media/brokenurlfix.jpg" alt="broken url fix" width="1000">

The report post validation fix.

<img src="sp5-media/htmlvalidated.jpg" alt="html post fix" width="1000">

The comments were identical across the site and the report above reflects this. 

## CSS Validation

The CSS validates perfectly on all sites can be seen from screenshot below for index.html. 

<img src="sp5-media/CSSvalid.jpg" alt="css valid " width="1000">

## Speed test (inc. optimisation of code and media)

The speed on the site was rated at 86% by checkbot on chrome this is due to compressed images and optomised code. We lost speed due to long caching times which can cause data to become stale but at this point in our knowledge and with tools available there wasnt much we could do about this however if allowed we could have harnessed tools on the cloud such as elasticache or lambda to host code. Mostly we had a good result to the code and fixed or remidiated many of the issue slowing our site down to keep a responsive and quick loading site keeping in with our user research for users that want information now. 

<img src="sp5-media/speed.jpg" alt="checkbot speed report" width="1000">

## Readability testing

Our text is puposely written in slang and short this is to suit our readers who would use these terms reguarly and want to read information quickly in this format. We believed from our user research this could build credibility between us and our users as this is how they would speak to friends therfore to some users outside of our targetted base may feel this format is wrong its an aim to put this information across like this. 

## SEO
<img src="sp5-media/speed.jpg" alt="SEO report" width="1000">
Checkbot scored at 70% which is a good score however I think this would have been higher if not for our news article pages these seem to drag us down as they were named article1,2,3 and 4 however it is difficult to give these unique names as the article will be changing reguarly however although we may miss out on unique titles and URLS on these pages the other pages of the website should draw the user in and the reguarly upgrade page description will optomise these further.
