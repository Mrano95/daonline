<?php
$amountOfArticles = 12;
$feed = file_get_contents('http://feeds.newscientist.com/today-on-ns');
// Parse data as XML
$parsedXML = new SimpleXmlElement($feed);
?>
<div class="latest-news">
  <h2>Laatse nieuws</h2>
  <div class='row'>
    <?php //foreach($parsedXML->channel->item as $entry)
    for($x = 1; $x <= $amountOfArticles; $x++) : ?>
      <div class="col-sm-4">
        <div class="rss-item">
          <a href="<?php echo $parsedXML->channel->item[$x]->link; ?>">
            <h3><?php echo $parsedXML->channel->item[$x]->title; ?></h3>
            <p><?php echo $parsedXML->channel->item[$x]->description; ?></p>
          </a>
        </div>
      </div>
    <?php endfor; ?>
  </div>
</div>
