<style>
    .modal-dialog {
        max-width: 800px;
        /* New width for default modal */
    }
</style>
<div wire:ignore.self class="modal" id="addProduct">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Product</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form class="form-card">

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label
                                    class="form-control-label px-3">Product Name<span class="text-danger">
                                        *</span></label> <input type="text" name="name"
                                    placeholder="Enter your first name" wire:model="name"> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label
                                    class="form-control-label px-3">Product Slug<span class="text-danger">
                                        *</span></label> <input type="text" name="slug"
                                    placeholder="Enter your last name" wire:model="slug"> </div>
                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-4 flex-column d-flex"> <label
                                    class="form-control-label px-3">Regular Price<span class="text-danger">
                                        *</span></label> <input type="text" name="old_price"
                                    placeholder="regular price" wire:model="old_price"> </div>
                            <div class="form-group col-sm-4 flex-column d-flex"> <label
                                    class="form-control-label px-3">Sell Price<span class="text-danger">
                                        *</span></label> <input type="text" name="regular_price"
                                    placeholder="selling price" wire:model="regular_price">
                            </div>
                            <div class="form-group col-sm-4 flex-column d-flex"> <label
                                    class="form-control-label px-3">Quantity<span class="text-danger"> *</span></label>
                                <input type="text" name="quantity" placeholder="enter quantity"
                                    wire:model="quantity">
                            </div>
                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-4 flex-column d-flex"> <label
                                    class="form-control-label px-3">SKU<span class="text-danger"> *</span></label>
                                <input type="text" name="SKU" placeholder="product sku" wire:model="SKU">
                            </div>
                            <div class="form-group col-sm-4 flex-column d-flex"> <label
                                    class="form-control-label px-3">Stock Status<span class="text-danger">
                                        *</span></label>
                                <select name="stock_status" class="form-control" wire:model="stock_status">
                                    <option disable selected> Select Stock</option>
                                    <option value='outofstock' style="color:red;font-weight:bold;">Out of Stock</option>
                                    <option value="instock" style="color:green;font-weight:bold;">In Stock</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-4 flex-column d-flex"> <label
                                    class="form-control-label px-3">Featured<span class="text-danger"> *</span></label>
                                <select name="featured" class="form-control" wire:model="featured">
                                    <option disable selected> Select Featured</option>
                                    <option value=0 style="color:red;font-weight:bold;">False</option>
                                    <option value=1 style="color:green;font-weight:bold;">True</option>
                                </select>
                            </div>
                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-4 flex-column d-flex"> <label
                                    class="form-control-label px-3">Popular<span class="text-danger"> *</span></label>
                                <select name="popular" class="form-control" wire:model="popular">
                                    <option disable selected> Select Popular</option>
                                    <option value=0 style="color:red;font-weight:bold;">Average</option>
                                    <option value=1 style="color:green;font-weight:bold;">Popular</option>
                                </select>
                            </div>

                            <div class="form-group col-sm-4 flex-column d-flex"> <label
                                    class="form-control-label px-3">Best
                                    Sell<span class="text-danger"> *</span></label>
                                <select name="featured" class="form-control" wire:model="best_sell">
                                    <option disable selected> Select Sell</option>
                                    <option value=0 style="color:red;font-weight:bold;">False</option>
                                    <option value=1 style="color:green;font-weight:bold;">True</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-4 flex-column d-flex"> <label
                                class="form-control-label px-3">Category<span class="text-danger"> *</span></label>
                            <select name="stock_status" class="form-control" wire:model="category_id">
                                <option disable selected> Select Category</option>
                                @foreach ($categories as $category)
                                    <option value={{ $category->id }} style="font-weight:bold;">
                                        {{ $category->name }}</option>
                                @endforeach
                            </select> </div>
                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label
                                    class="form-control-label px-3">Product
                                   Front Image <span class="text-danger"> *</span></label> <input type="file"
                                    name="images" wire:model="images"> </div>

                                    <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3">Product
                                        Back Image<span class="text-danger"> *</span></label> <input type="file"
                                        name="images_1" wire:model="images_1"> </div>
                              

                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-12 flex-column d-flex">
                                <label class="form-control-label px-3">Short Description<span class="text-danger">
                                        *</span></label>
                                <textarea class="form-control" name="short_description" required placeholder="enter product short description"
                                    style="height: 12rem;" wire:model="short_description"></textarea>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-12 flex-column d-flex">
                                <label class="form-control-label px-3">Long Description<span class="text-danger">
                                        *</span></label>
                                <textarea class="form-control" name="description" required placeholder="enter product long description"
                                    style="height: 16rem;" wire:model="description"></textarea>
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="form-group col-sm-6"> <button type="submit"
                                    class="btn-block btn-primary" wire:click.prevent="store">Add
                                    Product</button> </div>
                        </div>
                    </form>

                </div>

                <!-- Modal footer -->
                {{-- <div class="modal-footer">
                    <input type="submit" class="btn btn-info" value="Add Product"
                        wire:click.prevent="store">
                </div> --}}
            </form>
        </div>
    </div>
</div>
