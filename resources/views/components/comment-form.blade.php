@props(['blog'])
<x-card-wrapper
            >
                <form action="/blogs/{{$blog->slug}}/comments" method="POST">
                  @csrf
                    <div class="mb-3">
                        <textarea
                            required
                            name="comment"
                            cols="10"
                            class="form-control border border-0"
                            rows="5"
                            placeholder="say something..."
                        ></textarea>
                        <x-error name="comment"/>

                    </div>
                    <div class="d-flex justify-content-end">
                        <button
                            type="submit"
                            class="btn btn-primary"
                        >Submit</button>
                    </div>
                </form>
            </x-card-wrapper>