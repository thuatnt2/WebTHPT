<?php
/*
  This file is part of UserMgmt.

  Author: Chetan Varshney (http://ektasoftwares.com)

  UserMgmt is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 3 of the License, or
  (at your option) any later version.

  UserMgmt is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with Foobar.  If not, see <http://www.gnu.org/licenses/>.
 */

?>
<?php echo $this->Form->create('User', array('action' => 'login','class'=>'form-signin')); ?>
<?php echo $this->Session->flash(); ?>
<h2 class="form-signin-heading">Đăng nhập</h2>
<?php echo $this->Form->input('username', array('label' => false, 'div' => false, 'class' => 'input-block-level', 'placeholder' => 'Tên đăng nhập')) ?>
<?php echo $this->Form->input('password', array('type' => 'password', 'label' => false, 'div' => false, 'class' => 'input-block-level', 'placeholder' => 'Tên đăng nhập')) ?>
<label class="checkbox">
	<?php echo $this->Form->input('remember', array('type' => 'checkbox', 'label' => false,'div'=>'false')) ?>
	Ghi nhớ đăng nhập
</label>
<button class="btn btn-large btn-primary" type="submit">Sign in</button>
<?php echo $this->Form->end(); ?>