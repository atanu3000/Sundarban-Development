<h1 class="text-center mb-5">Product Details</h1>
<form action="include/form/insert.php" method="post" enctype="multipart/form-data" class="p-3 mx-auto" style="max-width: 600px;">
    <div class="mb-4">
        <label for="price" class="form-label">Product Name</label>
        <input type="text" name="pname" class="form-control" placeholder="Name of product" required>
    </div>
    <div class="mb-4">
        <label for="price" class="form-label">Price</label>
        <input type="text" name="price" class="form-control" placeholder="Price of product" required>
    </div>
    <div class="my-4">
        <label class="form-label d-block fs-5">Give relevant images</label>
        <input type="file" name="image" required />
    </div>
    <div class="my-4">
        <label class="form-label">Location: </label>
        <select name="location" class="form-select form-control" aria-label="Default select example" required>
            <option value="">Choose your location</option>
            <option value="L1">L1</option>
            <option value="L2">L2</option>
            <option value="L3">L3</option>
            <option value="L4">L4</option>
        </select>
    </div>
    <div class="my-4">
        <label class="form-label">Delivery Location: &nbsp;&nbsp;</label>
        <label><input type="checkbox" name="d_location[]" value="A">A</label>
        <label><input type="checkbox" name="d_location[]" value="B">B</label>
        <label><input type="checkbox" name="d_location[]" value="C">C</label>
    </div>
    <div class="my-4">
        <label class="form-label">Payment Mode: &nbsp;&nbsp;</label>
        <input type="radio" name="pmode" value="cash">Cash
        <input type="radio" name="pmode" value="UPI">UPI
        <input type="radio" name="pmode" value="Net Banking">Net Banking
    </div>
    <div class="my-4">
        <button class="form-control btn btn-primary" type="submit">Submit</button>
    </div>
</form>