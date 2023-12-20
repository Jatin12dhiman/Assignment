<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Book</title>
</head>
<body>
    <div class="container1">
        <div class="title">
            <h2>
                Add Product
            </h2>
        </div>
        <div class="buttons">
            <div class="button1">
                <button class="b1">
                    Select Category
                </button>
                <button class="b2">
                    Add Book Details
                </button>
            </div>
        </div>
        <div class="data1">
            <label for="category">
                Enter Category
            </label>
            <br>
            <input type="text" name="category" id="category">
        </div>
        <div class="data2">
            <label for="payment">
                Payment Allowed
            </label>
            <br>
            <select name="payment" id="payment">
                <option value="1">
                    UPI
                </option>
                <option value="2">
                    Cash
                </option>
                <option value="3">
                    Both
                </option>
            </select>
        </div>
        <div class="data3">
            <label for="return">
                Book Return
            </label>
            <input type="checkbox" name="return" id="return">
        </div>
        <div class="data4">
            <label for="shipping">
                Shipped by SDF
            </label>
            <input type="radio" name="shipping" id="shipping">
            <label for="shipping">
                Self Ship
            </label>
            <input type="radio" name="shipping" id="shipping">
        </div>
        <div class="next">
            <button class="next">
                Next
            </button>
        </div>
    </div>
    <div class="container2">
        <div class="addnew">
            <button class="add">
                Add Book
            </button>
        </div>
        <div class="details-title">
            <select name="book_no" id="book_no" disabled>
                <option value="1">
                    Book 1
                </option>
            </select>
            <br>
            <input type="checkbox" name="copy" id="copy">
            <label for="copy" class="copy">Copy input details to all product</label>
            <br>
            If you want to change specific fields for particular books like Name, Author, etc. you can change it by selecting the book.
        </div>
        <div class="images">
            <div class="front-image">
                <h3>
                    Front Image
                </h3>
                <div class="f-image-container">
                    <div class="browse-files">
                        <input type="file" name="f-image" id="f-image">
                    </div>
                </div>
            </div>
            <div class="other-images">
                <h3>
                    Other Images
                </h3>
                <div class="other-images-container">
                    <div class="browse-files">
                        <input type="file" name="o-image" id="o-image">
                    </div>
                </div>
            </div>
        </div>
        <div class="details-content">
            <div class="book-name">
                <label for="book_name">
                    <b>Book Name *</b>
                </label>
                <br>
                <input type="text" name="book_name" id="book_name" placeholder="book name">
            </div>
            <div class="isbn-code">
                <label for="isbn_code">
                    <b>ISBN Code</b>
                </label>
                <br>
                <input type="text" name="isbn_code" id="isbn_code" placeholder="Isbn Code">
            </div>
            <div class="inventory">
                <label for="quantity">
                    <b>
                        Inventory(Quantity)
                    </b>
                </label>
                <br>
                <input type="text" name="quantity" id="quantity" placeholder="Quantity">
            </div>
            <div class="sdf_price">
                <label for="sdf-price">
                    <b>
                        SDF Price *
                    </b>
                </label>
                <br>
                <input type="text" name="sdf-price" id="sdf-price" placeholder="SDF Price">
            </div>
            <div class="mrp_price">
                <label for="mrp-price">
                    <b>
                        MRP Price *
                    </b>
                </label>
                <br>
                <input type="text" name="mrp-price" id="mrp-price" placeholder="MRP Price">
            </div>
            <div class="gst">
                <label for="gst_">
                    <b>
                        GST % *
                    </b>
                </label>
                <br>
                <input type="text" name="gst_" id="gst_" value="1">
            </div>
            <div class="hsn_code">
                <label for="hsn-code">
                    <b>
                        HSN Code *
                    </b>
                </label>
                <br>
                <input type="text" name="hsn-code" id="hsn-code" placeholder="HSN Code">
            </div>
            <div class="book_weight">
                <label for="book-weight">
                    <b>
                        Book Weight
                    </b>
                </label>
                <br>
                <input type="text" name="book-weight" id="book-weight" placeholder="Book Weight">
            </div>
            <div class="size">
                <label for="size_">
                    <b>
                        Size
                    </b>
                </label>
                <br>
                <input type="text" name="size_" id="size_" placeholder="size">
            </div>
        </div>
    </div>
</body>
</html>