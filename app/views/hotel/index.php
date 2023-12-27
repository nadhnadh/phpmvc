
<div class="container">
        <h2 class="text-center">Nadhila Hotel Room Information</h3>

        <div class="row">

            <div class="col-md-10 mx-auto">
                <?php Flasher::flash(); ?>
            </div>
        </div>
        <div class="d-grid col-md-10 mx-auto">
        <button type="button" class="btn btn-primary tombolAddHotelRoom" data-bs-toggle="modal" data-bs-target="#formModal">
            Add Hotel Room
        </button>
        </div>
        
        <div class="card mt-4">
            <div class="card-header text-light bg-primary">
                List Hotel Rooms
            </div>
            <div class="card-body">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Code Room</th>
                    <th scope="col">Room Number</th>
                    <th scope="col">Category</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        foreach($data['room'] as $room):
                    ?>
                    <tr>
                        <td><?= $no++?></td>
                        <td><?= $room['code'] ?></td>
                        <td><?= $room['room_number'] ?></td>
                        <td><?= $room['category'] ?></td>
                        <td><?= $room['status'] ?></td>
                        <td class="text-center">
                        <a href="<?= BASEURL; ?>/hotel/edit/<?= $room['id_room'] ?>" class="btn btn-warning tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $room['id_room']?>">Edit</a>
                            <a href="<?= BASEURL; ?>/hotel/hapus/<?= $room['id_room'] ?>"
                            class="btn btn-danger" onclick="return confirm ('Are you sure to delete this data?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Add Hotel Room</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL; ?>/hotel/tambah/" method="POST">
                <div class="mb-3">
                    <label class="form-label">Code Room</label>
                    <input type="text" name="roomcode" id="roomcode" value="" class="form-control" placeholder="Input Room Code">
                </div>

                <div class="mb-3">
                    <label class="form-label">Room Number</label>
                    <input type="text" name="roomnumb" id="roomnumb" value="" class="form-control" placeholder="Input Room Number">
                </div>

                <div class="row">
                    <div class="col">
                            <div class="mb-3">
                            <label class="form-label">Category</label>
                            <select class="form-select" name="roomcategory" id="roomcategory">
                                <option value="Single Bedroom">Single Bedroom</option>
                                <option value="Double Bedroom">Double Bedroom</option>
                                <option value="Suite Bedroom">Suite Bedroom</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                    <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select class="form-select" name="roomstatus" id="roomstatus">
                                <option value="Available">Available</option>
                                <option value="Unavailable">Unavailable</option>
                            </select>
                        </div>
                    </div>
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save Room</button>
        </form>
      </div>
    </div>
  </div>
</div>