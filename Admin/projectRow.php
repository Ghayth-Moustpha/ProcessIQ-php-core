

<template> 
<tr>
                        <td>
                          <div class="d-flex px-2">
                            <div>
                            </div>
                            <div class="my-auto">
                              <h6 class="mb-0 text-sm"><?= $Project ["Title"] ?> </h6>
                            </div>
                          </div>
                        </td>
                      
                        <td>
                          <span class="text-xs font-weight-bold"><?= $Project["description" ] ?> </span>
                        </td>
                        <td class="align-middle text-center">
                          <div class="d-flex align-items-center justify-content-center">
                            <span class="me-2 text-xs font-weight-bold"> <?= $Project["Deadline"]?>   </span>
                            <div>
                             
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">
                          <button class="btn btn-link text-secondary mb-0">
                            <i class="fa fa-ellipsis-v text-xs"></i>
                          </button>
                        </td>
</tr>

</template>