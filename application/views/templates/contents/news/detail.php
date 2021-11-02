<div class="container mt-2">
  <div class="pt-3 d-block"></div>
  <div class="blog-details-post-thumbnail position-relative">
    <!-- Post Image --><img class="w-100 rounded-lg" id="foto" src="<?= base_url() ?>assets/img/custom/2.jpg" alt="">
  </div>
</div>
<div class="container mt-2">
  <div class="blog-description p-3 bg-white rounded-15  shadow-sm">
    <h4 id="title"></h4>
    <div class="container" id="deskripsi">

    </div>
  </div>
</div>

<!-- All Comments -->
<div class="rating-and-review-wrapper pb-3 mt-3" style="display: none;" id="container_comment">
  <div class="container">
    <div class="bg-white rounded-15 shadow-sm p-3">
      <h6 class="mb-3">All comments</h6>
      <!-- Rating Review -->
      <div class="rating-review-content">
        <ul class="ps-2" id="list_comment">
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Comment Form -->
<div class="ratings-submit-form pb-3 mt-2">
  <div class="container">
    <div class="bg-white rounded-15 shadow-sm p-3">
      <h6 class="mb-3">Submit a comment</h6>
      <form action="" id="fcomment">
        <div class="form-group">
          <textarea class="form-control mb-3" name="comment" cols="30" rows="10" placeholder="Write a comment" required></textarea>
        </div>
        <button class="btn w-100 btn-indigo" type="submit">Post Comment</button>
      </form>
    </div>
  </div>
</div>

<script>
  const news_id = '<?= $news_id ?>';
</script>