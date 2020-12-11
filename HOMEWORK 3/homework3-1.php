<?php

  $day=$_GET["day"];
  $month=$_GET["month"];
  $name=$_GET["name"];
  switch($_GET["gender"]){
    case 1:
      $gender="Male";
      break;
    case 2:
      $gender="Female";
      break;
  }
  
  echo "Your name is $name <br>";
  echo "Your gender is $gender <br>";
  echo "Your date of birth is $day/$month <br><br><br>";
  
  switch($month){
    case 1:
      if($day>=1 && $day<=19){
        echo "<h1>Capricorn (Dec 22-Jan 19)</h1>";
        echo "<table><tr><td>";
        echo '<p><img src="http://assets.ganeshaspeaks.com/GSV6/images/sunsign/capricorn200.jpg"></p>';
        echo "</td><td>Your year begins with a difficult Mars-Saturn (your ruling planet) square to deal with toward the middle of January, so despite wanting to go full speed ahead with those New Year's resolutions, something is holding you back. Frustration can set in when you attempt to try anything new right now, so it's best to sit tight and be patient. </td></tr></table>";
      }
      else if($day>=20 && $day<=31){
        echo "<h1>Aquarius (Jan 20-Feb 18)</h1>";
        echo "<table><tr><td>";
        echo '<p><img src="http://assets.ganeshaspeaks.com/GSV6/images/sunsign/aquarius200.jpg"></p>';
        echo "</td><td>The Sun takes up residence in your sign toward the end of January, so the focus shifts from the hard bottom line of Capricorn into a more eccentric, progressive way of thinking that you can readily identify with. This is the time of the year to see that there are possibilities everywhere and that you can be more than just a cog in the all-important wheel of change. You also have big humanitarian tendencies, Aquarius, so helping others will be a major focus of the coming month.</td></tr></table>";
      }
      else {
        echo "<h1>Error : Invalid information";
        echo "<h3>Please type your date of birth correctly";
      }
      break;
    case 2:
      if($day>=1 && $day<=18){
        echo "<h1>Aquarius (Jan 20-Feb 18)</h1>";
        echo "<table><tr><td>";
        echo '<p><img src="http://assets.ganeshaspeaks.com/GSV6/images/sunsign/aquarius200.jpg"></p>';
        echo "</td><td>The Sun takes up residence in your sign toward the end of January, so the focus shifts from the hard bottom line of Capricorn into a more eccentric, progressive way of thinking that you can readily identify with. This is the time of the year to see that there are possibilities everywhere and that you can be more than just a cog in the all-important wheel of change. You also have big humanitarian tendencies, Aquarius, so helping others will be a major focus of the coming month.</td></tr></table>";
      }
      else if($day>=19 && $day<=30){
        echo "<h1>Pisces (Feb 19-Mar 20)</h1>";
        echo "<table><tr><td>";
        echo '<p><img src="http://assets.ganeshaspeaks.com/GSV6/images/sunsign/pisces200.jpg"></p>';
        echo "</td><td>Something to be aware of as you start 2017 is that Neptune, your dreamy ruler, is in your sign and will be until 2025. This is a very long transit, and helps you pass through the barriers of materialism in order to tap into a more ethereal plane. Your dreams (both awake and asleep), imagination, and intuition play a vital role in your life and allow you to stretch the field of possibility, so don't lose sight of your special sensitive, spiritual gifts this year.</td></tr></table>";
      }
      else {
        echo "<h1>Error : Invalid information";
        echo "<h3>Please type your date of birth correctly";
      }
      break;
    case 3:
      if($day>=1 && $day<=20){
        echo "<h1>Pisces (Feb 19-Mar 20)</h1>";
        echo "<table><tr><td>";
        echo '<p><img src="http://assets.ganeshaspeaks.com/GSV6/images/sunsign/pisces200.jpg"></p>';
        echo "</td><td>Something to be aware of as you start 2017 is that Neptune, your dreamy ruler, is in your sign and will be until 2025. This is a very long transit, and helps you pass through the barriers of materialism in order to tap into a more ethereal plane. Your dreams (both awake and asleep), imagination, and intuition play a vital role in your life and allow you to stretch the field of possibility, so don't lose sight of your special sensitive, spiritual gifts this year.</td></tr></table>";
      }
      else if($day>=21 && $day<=31){
        echo "<h1>Aries (Mar 21-Apr 19)</h1>";
        echo "<table><tr><td>";
        echo '<p><img src="http://assets.ganeshaspeaks.com/GSV6/images/sunsign/aries200.jpg"></p>';
        echo "</td><td>2017 isn't all peaches and cream at the start, as you struggle to find your footing during the challenging Mars-Saturn square in mid-January. Fear not, though, fiery Aries, because although you have some obligations (perhaps family-related) that directly conflict with events that you've been looking forward to for what seems like forever, it's not always your way or the highway. There is definitely a middle ground, you just have to find it. Compromises can be reached under the right circumstances, so give other people the chance to make a suggestion every once in a while.</td></tr></table>";
      }
      else {
        echo "<h1>Error : Invalid information";
        echo "<h3>Please type your date of birth correctly";
      }
      break;
    case 4:
      if($day>=1 && $day<=19){
        echo "<h1>Aries (Mar 21-Apr 19)</h1>";
        echo "<table><tr><td>";
        echo '<p><img src="http://assets.ganeshaspeaks.com/GSV6/images/sunsign/aries200.jpg"></p>';
        echo "</td><td>2017 isn't all peaches and cream at the start, as you struggle to find your footing during the challenging Mars-Saturn square in mid-January. Fear not, though, fiery Aries, because although you have some obligations (perhaps family-related) that directly conflict with events that you've been looking forward to for what seems like forever, it's not always your way or the highway. There is definitely a middle ground, you just have to find it. Compromises can be reached under the right circumstances, so give other people the chance to make a suggestion every once in a while.</td></tr></table>";
      }
      else if($day>=20 && $day<=30){
        echo "<h1>Taurus (Apr 20-Jun 20)</h1>";
        echo "<table><tr><td>";
        echo '<p><img src="http://assets.ganeshaspeaks.com/GSV6/images/sunsign/taurus200.jpg"></p>';
        echo "</td><td>Venus is your ruler, and she starts the year out in compassionate Pisces, so right away in January you have the proverbial shoulder that everyone wants to cry on. Venus loves to be in the Fish's imaginative and sensitive sign, which is obvious from the optimistic energy emanating all around you. This aspect softens even the hardest of hearts, and puts you in a giving mood. Doing favors without expecting anything in return? Yup, that's how you roll.</td></tr></table>";
      }
      else {
        echo "<h1>Error : Invalid information";
        echo "<h3>Please type your date of birth correctly";
      }
      break;
    case 5:
      if($day>=1 && $day<=20){
        echo "<h1>Taurus (Apr 20-Jun 20)</h1>";
        echo "<table><tr><td>";
        echo '<p><img src="http://assets.ganeshaspeaks.com/GSV6/images/sunsign/taurus200.jpg"></p>';
        echo "</td><td>Venus is your ruler, and she starts the year out in compassionate Pisces, so right away in January you have the proverbial shoulder that everyone wants to cry on. Venus loves to be in the Fish's imaginative and sensitive sign, which is obvious from the optimistic energy emanating all around you. This aspect softens even the hardest of hearts, and puts you in a giving mood. Doing favors without expecting anything in return? Yup, that's how you roll.</td></tr></table>";
      }
      else if($day>=21 && $day<=31){
        echo "<h1>Gemini (May 21-Jun 20)</h1>";
        echo "<table><tr><td>";
        echo '<p><img src="http://assets.ganeshaspeaks.com/GSV6/images/sunsign/gemini200.jpg"></p>';
        echo "</td><td>Your ruling planet, the communicative Mercury, starts out the year direct and then immediately goes retrograde (back into Sagittarius) in the first week of January. Ready to do some backtracking? You may want to immediately revoke some words or actions you let slip in a heated moment, but right now take-backs and do-overs aren't likely. Let bygones be bygones.</td></tr></table>";
      }
      else {
        echo "<h1>Error : Invalid information";
        echo "<h3>Please type your date of birth correctly";
      }
      break;
    case 6:
      if($day>=1 && $day<=20){
        echo "<h1>Gemini (May 21-Jun 20)</h1>";
        echo "<table><tr><td>";
        echo '<p><img src="http://assets.ganeshaspeaks.com/GSV6/images/sunsign/gemini200.jpg"></p>';
        echo "</td><td>Your ruling planet, the communicative Mercury, starts out the year direct and then immediately goes retrograde (back into Sagittarius) in the first week of January. Ready to do some backtracking? You may want to immediately revoke some words or actions you let slip in a heated moment, but right now take-backs and do-overs aren't likely. Let bygones be bygones.</td></tr></table>";
      }
      else if($day>=21 && $day<=30){
        echo "<h1>Cancer (Jun 21-Jul 22)</h1>";
        echo "<table><tr><td>";
        echo '<p><img src="http://assets.ganeshaspeaks.com/GSV6/images/sunsign/cancer200.jpg"></p>';
        echo "</td><td>It's true that the Moon, your ruling planet, shifts often in the sky, but it's still worth noting that it's Full in your own sensitive sign at the beginning of January. This Moon is part of a four-point configuration called the Cardinal Grand Cross right now, and indicates a key time to regroup and refocus your energy. If you're going through a tough time, bring everything to a halt as you regather your thoughts. What should your next move be?</td></tr></table>";
      }
      else {
        echo "<h1>Error : Invalid information";
        echo "<h3>Please type your date of birth correctly";
      }
      break;
    case 7:
      if($day>=1 && $day<=22){
        echo "<h1>Cancer (Jun 21-Jul 22)</h1>";
        echo "<table><tr><td>";
        echo '<p><img src="http://assets.ganeshaspeaks.com/GSV6/images/sunsign/cancer200.jpg"></p>';
        echo "</td><td>It's true that the Moon, your ruling planet, shifts often in the sky, but it's still worth noting that it's Full in your own sensitive sign at the beginning of January. This Moon is part of a four-point configuration called the Cardinal Grand Cross right now, and indicates a key time to regroup and refocus your energy. If you're going through a tough time, bring everything to a halt as you regather your thoughts. What should your next move be?</td></tr></table>";
      }
      else if($day>=23 && $day<=31){
        echo "<h1>Leo (Jul 23-Aug 22)</h1>";
        echo "<table><tr><td>";
        echo '<p><img src="http://assets.ganeshaspeaks.com/GSV6/images/sunsign/leo200.jpg"></p>';
        echo "</td><td>An early February Lunar Eclipse in your sign hints that no major changes should be made around then, yet it's also a fortunate time due to both the Sun (your ruler) and Moon having compatible Jupiter influences. This energy is all about the major relationships in your life, and how well you've been maintaining them. If there's something wrong, you'll hear about it now, but don't be too quick to take action. Your ego is on the line, and any major mistakes you make now could be far-reaching and long-lasting.</td></tr></table>";
      }
      else {
        echo "<h1>Error : Invalid information";
        echo "<h3>Please type your date of birth correctly";
      }
      break;
    case 8:
      if($day>=1 && $day<=22){
        echo "<h1>Leo (Jul 23-Aug 22)</h1>";
        echo "<table><tr><td>";
        echo '<p><img src="http://assets.ganeshaspeaks.com/GSV6/images/sunsign/leo200.jpg"></p>';
        echo "</td><td>An early February Lunar Eclipse in your sign hints that no major changes should be made around then, yet it's also a fortunate time due to both the Sun (your ruler) and Moon having compatible Jupiter influences. This energy is all about the major relationships in your life, and how well you've been maintaining them. If there's something wrong, you'll hear about it now, but don't be too quick to take action. Your ego is on the line, and any major mistakes you make now could be far-reaching and long-lasting.</td></tr></table>";
      }
      else if($day>=23 && $day<=31){
        echo "<h1>Virgo (Aug 23-Sep 22)</h1>";
        echo "<table><tr><td>";
        echo '<p><img src="http://assets.ganeshaspeaks.com/GSV6/images/sunsign/virgo200.jpg"></p>';
        echo "</td><td>Your year begins slowly with your guiding planet, Mercury, in retrograde at the beginning of January, so your resolutions may get put on hold. Remember all of the old stuff that hadn't been decided at the end of last year? Well, Virgo, it's still hanging around, begging to be dealt with. Slow down. And handle what's already on your plate before dishing out more.</td></tr></table>";
      }
      else {
        echo "<h1>Error : Invalid information";
        echo "<h3>Please type your date of birth correctly";
      }
      break;
    case 9:
      if($day>=1 && $day<=22){
        echo "<h1>Virgo (Aug 23-Sep 22)</h1>";
        echo "<table><tr><td>";
        echo '<p><img src="http://assets.ganeshaspeaks.com/GSV6/images/sunsign/virgo200.jpg"></p>';
        echo "</td><td>Your year begins slowly with your guiding planet, Mercury, in retrograde at the beginning of January, so your resolutions may get put on hold. Remember all of the old stuff that hadn't been decided at the end of last year? Well, Virgo, it's still hanging around, begging to be dealt with. Slow down. And handle what's already on your plate before dishing out more.</td></tr></table>";
      }
      else if($day>=23 && $day<=30){
        echo "<h1>Libra (Sep 23-Oct 22)</h1>";
        echo "<table><tr><td>";
        echo '<p><img src="http://assets.ganeshaspeaks.com/GSV6/images/sunsign/libra200.jpg"></p>';
        echo "</td><td>A Venus (your ruler)-Neptune conjunction in mid-January gets your year off to a compassionate start. There is a softness about you that others may try to take advantage of, so be sure to note the difference between being helpful and doing favors for people versus letting others walk all over you. Just because you're sympathetic to a cause doesn't mean that you're a doormat.</td></tr></table>";
      }
      else {
        echo "<h1>Error : Invalid information";
        echo "<h3>Please type your date of birth correctly";
      }
      break;
    case 10:
      if($day>=1 && $day<=22){
        echo "<h1>Libra (Sep 23-Oct 22)</h1>";
        echo "<table><tr><td>";
        echo '<p><img src="http://assets.ganeshaspeaks.com/GSV6/images/sunsign/libra200.jpg"></p>';
        echo "</td><td>A Venus (your ruler)-Neptune conjunction in mid-January gets your year off to a compassionate start. There is a softness about you that others may try to take advantage of, so be sure to note the difference between being helpful and doing favors for people versus letting others walk all over you. Just because you're sympathetic to a cause doesn't mean that you're a doormat.</td></tr></table>";
      }
      else if($day>=23 && $day<=31){
        echo "<h1>Scorpio (Oct 23-Nov 21)</h1>";
        echo "<table><tr><td>";
        echo '<p><img src="http://assets.ganeshaspeaks.com/GSV6/images/sunsign/scorpio200.jpg"></p>';
        echo "</td><td>Your year gets off to an unbalanced start thanks to a conflicting Mars-Saturn square in the middle of January. Mars is one of the powerful, forceful planets that guides you, and getting into it with controlled Saturn causes some turbulence. You want nothing more than to drive ahead at full speed, but there's also something urging you to keep your foot on the brake. You won't get far with these conflicting signals in your head, so try to be patient as you navigate through the frustration.</td></tr></table>";
      }
      else {
        echo "<h1>Error : Invalid information";
        echo "<h3>Please type your date of birth correctly";
      }
      break;
    case 11:
      if($day>=1 && $day<=21){
        echo "<h1>Scorpio (Oct 23-Nov 21)</h1>";
        echo "<table><tr><td>";
        echo '<p><img src="http://assets.ganeshaspeaks.com/GSV6/images/sunsign/scorpio200.jpg"></p>';
        echo "</td><td>Your year gets off to an unbalanced start thanks to a conflicting Mars-Saturn square in the middle of January. Mars is one of the powerful, forceful planets that guides you, and getting into it with controlled Saturn causes some turbulence. You want nothing more than to drive ahead at full speed, but there's also something urging you to keep your foot on the brake. You won't get far with these conflicting signals in your head, so try to be patient as you navigate through the frustration.</td></tr></table>";
      }
      else if($day>=22 && $day<=30){
        echo "<h1>Sagittarius (Nov 22-Dec 21)</h1>";
        echo "<table><tr><td>";
        echo '<p><img src="http://assets.ganeshaspeaks.com/GSV6/images/sunsign/sagittarius200.jpg"></p>';
        echo "</td><td>You get to set the reset button with Jupiter (your ruling planet) retrograde in the beginning of February. Think 're' as much as possible: rewind, rethink, restart, review, return. It isn't often you get a chance to do it all over again, but now is the time. If you want to make revisions -- especially when it comes to morals, ethics or religion -- you get that chance in the next four weeks.</td></tr></table>";
      }
      else {
        echo "<h1>Error : Invalid information";
        echo "<h3>Please type your date of birth correctly";
      }
      break;
    case 12:
      if($day>=1 && $day<=21){
        echo "<h1>Sagittarius (Nov 22-Dec 21)</h1>";
        echo "<table><tr><td>";
        echo '<p><img src="http://assets.ganeshaspeaks.com/GSV6/images/sunsign/sagittarius200.jpg"></p>';
        echo "</td><td>You get to set the reset button with Jupiter (your ruling planet) retrograde in the beginning of February. Think 're' as much as possible: rewind, rethink, restart, review, return. It isn't often you get a chance to do it all over again, but now is the time. If you want to make revisions -- especially when it comes to morals, ethics or religion -- you get that chance in the next four weeks.</td></tr></table>";
      }
      else if($day>=22 && $day<=31){
        echo "<h1>Capricorn (Dec 22-Jan 19)</h1>";
        echo "<table><tr><td>";
        echo '<p><img src="http://assets.ganeshaspeaks.com/GSV6/images/sunsign/capricorn200.jpg"></p>';
        echo "</td><td>Your year begins with a difficult Mars-Saturn (your ruling planet) square to deal with toward the middle of January, so despite wanting to go full speed ahead with those New Year's resolutions, something is holding you back. Frustration can set in when you attempt to try anything new right now, so it's best to sit tight and be patient. </td></tr></table>";
      }
      else {
        echo "<h1>Error : Invalid information";
        echo "<h3>Please type your date of birth correctly";
      }
      break;
    default:
      echo "<h1>Error : Invalid information";
      echo "<h3>Please type your date of birth correctly";
      break;
  }
  
?>