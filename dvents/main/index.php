<?php
if (isset($_POST['sbtn'])) {
    extract($_POST);
    $tp = $t1.' - '.$t2;

    $res = insert('event', [
  'title' => $title,
  'venue' => $venue,
  'dt' => $dt,
  'tp' => $tp,
], $_FILES);
    if ($res == 'success') {
        echo '<script>
      alert("Event added Successfuly");
      window.location="eventdashboard";
    </script>';
    } else {
        echo '<script>
  alert("Failed to add event");
</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Colorlib Templates">
  <meta name="author" content="Colorlib">
  <meta name="keywords" content="Colorlib Templates">

  <title> Adding Event</title>

  <style id="" media="all">
    @font-face {
      font-family: 'Open Sans';
      font-style: italic;
      font-weight: 300;
      font-stretch: normal;
      font-display: swap;
      src: url(/fonts.gstatic.com/s/opensans/v29/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0Rk5hkWVAexg.woff) format('woff');
    }

    @font-face {
      font-family: 'Open Sans';
      font-style: italic;
      font-weight: 400;
      font-stretch: normal;
      font-display: swap;
      src: url(/fonts.gstatic.com/s/opensans/v29/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0Rk8ZkWVAexg.woff) format('woff');
    }

    @font-face {
      font-family: 'Open Sans';
      font-style: italic;
      font-weight: 600;
      font-stretch: normal;
      font-display: swap;
      src: url(/fonts.gstatic.com/s/opensans/v29/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0RkxhjWVAexg.woff) format('woff');
    }

    @font-face {
      font-family: 'Open Sans';
      font-style: italic;
      font-weight: 700;
      font-stretch: normal;
      font-display: swap;
      src: url(/fonts.gstatic.com/s/opensans/v29/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0RkyFjWVAexg.woff) format('woff');
    }

    @font-face {
      font-family: 'Open Sans';
      font-style: italic;
      font-weight: 800;
      font-stretch: normal;
      font-display: swap;
      src: url(/fonts.gstatic.com/s/opensans/v29/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0Rk0ZjWVAexg.woff) format('woff');
    }

    @font-face {
      font-family: 'Open Sans';
      font-style: normal;
      font-weight: 300;
      font-stretch: normal;
      font-display: swap;
      src: url(/fonts.gstatic.com/s/opensans/v29/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsiH0B4gaVQ.woff) format('woff');
    }

    @font-face {
      font-family: 'Open Sans';
      font-style: normal;
      font-weight: 400;
      font-stretch: normal;
      font-display: swap;
      src: url(/fonts.gstatic.com/s/opensans/v29/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsjZ0B4gaVQ.woff) format('woff');
    }

    @font-face {
      font-family: 'Open Sans';
      font-style: normal;
      font-weight: 600;
      font-stretch: normal;
      font-display: swap;
      src: url(/fonts.gstatic.com/s/opensans/v29/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsgH1x4gaVQ.woff) format('woff');
    }

    @font-face {
      font-family: 'Open Sans';
      font-style: normal;
      font-weight: 700;
      font-stretch: normal;
      font-display: swap;
      src: url(/fonts.gstatic.com/s/opensans/v29/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsg-1x4gaVQ.woff) format('woff');
    }

    @font-face {
      font-family: 'Open Sans';
      font-style: normal;
      font-weight: 800;
      font-stretch: normal;
      font-display: swap;
      src: url(/fonts.gstatic.com/s/opensans/v29/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgshZ1x4gaVQ.woff) format('woff');
    }
  </style>

  <link href="dvents/main/css/css-main.css" rel="stylesheet" media="all">
  <meta name="robots" content="noindex, follow">
</head>

<body>
  <div class="page-wrapper bg-dark p-t-100 p-b-50">
    <div class="wrapper wrapper--w900">
      <div class="card card-6">
        <div class="card-heading">
          <h2 class="title">Add Events</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="eventdashboard" enctype="multipart/form-data">
                <div class="form-row">
                  <div class="name">Event Title</div>
                  <div class="value">
                    <input class="input--style-6" type="text" name="title">
                  </div>
                </div>
                <div class="form-row">
                  <div class="name">Venue</div>
                  <div class="value">
                    <div class="input-group">
                      <input class="input--style-6" type="text" name="venue" placeholder="Venue">
                    </div>
                  </div>
                </div>
    
                <div class="form-row">
                  <div class="name">Date</div>
                  <div class="value">
                    <div class="input-group">
                      <input class="input--style-6" type="date" name="dt" placeholder="">
                    </div>
                  </div>
                </div>
    
    
                <div class="form-row">
                  <div class="name">From</div>
                  <div class="value">
                    <div class="input-group">
                      <input class="input--style-6" type="time" name="t1" placeholder="">
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="name">To</div>
                  <div class="value">
                    <div class="input-group">
                      <input class="input--style-6" type="time" name="t2" placeholder="">
                    </div>
                  </div>
                </div>
                
                <div class="form-row">
                  <div class="name">Upload Image</div>
                  <div class="value">
                    <div class="input-group js-input-file">
                      <input class="input-file" type="file" name="pic" id="file">
                      <label class="label--file" for="file">Choose file</label>
                      <span class="input-file__info">No file chosen</span>
                    </div>
                    <div class="label--desc">Upload event image</div>
                  </div>
                </div>
              
            </div>
            <div class="card-footer">
              <input class="btn btn--radius-2 btn--blue-2" name="sbtn" type="submit" value="Submit">
            </div>
        </form>
      </div>
    </div>
  </div>

  <script src="dvents/main/js/jquery-jquery.min.js"></script>

  <script src="dvents/main/js/7715-js-global.js"></script>

  
 
</body>

</html>