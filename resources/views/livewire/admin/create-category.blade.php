
<div wire:ignore.self class="modal" id="addCategory">
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
                    <label for="Name">Product Name</label>
                    <input type="text" class="form-control" name="name" required
                        placeholder="enter product name" wire:model="name">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <label for="Name">Product Slug</label>
                    <input type="text" class="form-control" name="slug" required
                        placeholder="enter product slug" wire:model="slug">
                    @error('slug')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <input type="submit" class="btn btn-info" value="Add Product Category"
                        wire:click.prevent="store">
                </div>
            </form>
        </div>
    </div>
</div>
