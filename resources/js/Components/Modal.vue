<template>
  <div class="modal-backdrop">
    <div class="modal">
        <div class="modal-header">
            <span>New Recording</span>
            <span>&times;</span>
        </div>
        <div class="divider"></div>
        <div class="modal-body">
            <form class="modal-form" @submit.prevent="books">
                <div class="save-as">
                    <div class="form-group">
                        <label>Save the recording in</label>
                        <select>
                            <option value="">Select a project</option>
                        </select>
                    </div>

                </div>

                <div class="togglers">
                    <div class="form-group">
                        <label>Record Screen</label>
                    </div>
                    <div class="form-group">
                        <label>Record Camera</label>
                    </div>
                    <div class="form-group">
                        <label>Record Mic</label>
                    </div>
                </div>

                <div class="btn-form">
                    <button class="btn">Start Recording</button>
                </div>


            </form>

        </div>
    </div>
  </div>
</template>

<script>
export default {
    methods: {
        books() {
            console.log('data');
        }
    }
}
</script>

<style lang="less">
@import '../../css/GlobalStyles/variables.less';


.modal-backdrop {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 9000;
    background: rgba(0, 0, 0, 0.5);
    display: grid;
    place-items: center;
    font-size: 14px;


    .modal {
        width: 280px;
        height: 280px;
        background-color: #fff;
        border-radius: 6px;

        .modal-header {
            width: 100%;
            padding: 10px 20px;
            font-weight: bold;
            position: relative;

            span:nth-child(2) {
                position: absolute;
                right: 5px;
                top: 6px;
                padding: 4px 9px;
                font-size: 15px;
                font-weight: lighter;
            }
        }
        .divider {
            border: 1px solid @hover-link;
            
        }
        
        .modal-body {
            padding: 10px 20px;
            
            .save-as {
    
                .form-group {
                    display: flex;
                    flex-direction: column;
                    gap: 8px;
    
                    label {
                        width: 100%;
                        display: block;
                    }
                    
                    select {
                        width: 100%;
                        border-radius: 5px;
                        padding: 6px 10px;
                        background: @hover-link;
                        border: none;
        
                    }
    
                }
                
            }

            .modal-form {
                display: flex;
                flex-direction: column;
                gap: 20px;
            }

            .togglers {
                display: flex;
                flex-direction: column;
                gap: 14px;
            }

            .btn-form {
                width: 100%;
                display: grid;
                place-items: center;

                .btn {
                    border-radius: 10px;
                    padding: 6px 25px;
                    outline: none;
                    font-size: 12px;
                    appearance: none;
                    border: none;
                    background: @blue-button;
                    color: #fff;
                }
            }
            
            
        }
    }
}

</style>