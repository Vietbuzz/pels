<div class="row posts form">
    <div class="col-lg-12">
        <h1 class="page-header">Playlist
            <small>Add</small>
        </h1>
    </div>
    <!-- /.col-lg-12 -->
    <div class="col-lg-7" style="padding-bottom:120px">
        <?php echo $this->Form->create('Playlist' , array( 'type' => 'post', 'action'=>'admin_add' ));?>
            <div class="form-group">
                <label>Level</label>
                <select class="form-control" name="level">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="form-group">
                <label>Name</label>
                <input class="form-control" name="name" placeholder="Please Enter Category Name" />
            </div>
            <div class="form-group">
                <label>Image</label>
                <input class="form-control" name="image" placeholder="Please Enter Category Keywords" />
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" rows="3" name="description"></textarea>
            </div>
        <?php echo $this->Form->end('Submit');?>
    </div>
</div>