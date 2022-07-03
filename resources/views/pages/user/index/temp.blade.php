@foreach($arr1 as $key => $staticarray)
                                         @foreach($checkbox as $k => $box)
                                        <div class="col-md-3">
                                            <label for="a" class="ml-3" style="margin-left:20px;">

                                               @if($box == $staticarray)
                                                    <input type="checkbox" name="checkbox[]" checked="" class="form-check-input " value="{{$staticarray}}" >
                                                      {{$arr[$key]}}
                                                      @php
                                                        unset($checkbox[$k]);
                                                      @endphp
                                               @else
                                              <input type="checkbox" name="checkbox[]"  class="form-check-input " value="{{$staticarray}}" >
                                                      {{$arr[$key]}}

                                                @endif


                                            </label>
                                        </div>
                                         @endforeach
                                        @endforeach
