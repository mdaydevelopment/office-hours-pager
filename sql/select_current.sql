SELECT DISTINCT userid
  FROM office_hours o
  JOIN terms t
    ON o.termid = t.termid
 WHERE WEEKDAY(NOW()) = o.day_of_week
   AND NOW() > o.hourstart
   AND NOW() < o.hourend
   AND NOW() > t.startdate
   AND NOW() < t.enddate;
