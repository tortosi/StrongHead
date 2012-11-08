<div id="fi">
    <div class="block-bg">
        <div id="ad-content">
        </div>
    </div>
        <script type="text/javascript">//<![CDATA[ 
    {literal}
    Menu.modifyUrl(
        Menu.findItem(mn_database, [0]), { filter: '+=si=-1' }, { onAppendCollision: fi_mergeFilterParams, onAppendEmpty: fi_setFilterParams, menuUrl: Menu.getItemUrl(Menu.findItem(mn_database, [0])) });
{/literal}
//]]></script>



<form action="" method="get" name="fi" onsubmit="return fi_submit(this)" onreset="return fi_reset(this)">
<input type="hidden" name="items" value="filter" />
<div class="rightpanel">
<div style="float: left">Calidad: </div><small><a href="javascript:;" onclick="document.forms['fi'].elements['qu[]'].selectedIndex = -1; return false" onmousedown="return false">Limpiar</a></small>
<div class="clear"></div>
<select name="qu[]" size="8" multiple="multiple" class="rightselect" style="background-color: #181818">
<option value="0" class="q0">Pobre</option>
<option value="1" class="q1">Común</option>
<option value="2" class="q2">poco Común</option>
<option value="3" class="q3">Raro</option>
<option value="4" class="q4">Épico</option>
<option value="5" class="q5">Legendario</option>
<option value="6" class="q6">Artefacto</option>
<option value="7" class="q7">Reliquia</option>
</select>
</div>

<div class="rightpanel2">
<div style="float: left">Casilla: </div><small><a href="javascript:;" onclick="document.forms['fi'].elements['sl[]'].selectedIndex = -1; return false" onmousedown="return false">Limpiar</a></small>
<div class="clear"></div>
<select name="sl[]" size="7" multiple="multiple" class="rightselect">
<option value="16">Espalda</option>
<option value="18">Bolsa</option>
<option value="5">Pecho</option>
<option value="8">Pies</option>
<option value="11">Dedo</option>
<option value="10">Manos</option>
<option value="1">Cabeza</option>
<option value="23">Sostener con la mano izquierda</option>
<option value="7">Piernas</option>
<option value="21">Mano derecha</option>
<option value="2">Cuello</option>
<option value="22">Mano izquierda</option>
<option value="13">Una mano</option>
<option value="24">Proyectiles</option>
<option value="15">A distancia</option>
<option value="28">Reliquia</option>
<option value="14">Escudo</option>
<option value="4">Camisa</option>
<option value="3">Hombros</option>
<option value="19">Tabardo</option>
<option value="25">Arrojadizas</option>
<option value="12">Abalorio</option>
<option value="17">Dos manos</option>
<option value="6">Cintura</option>
<option value="9">Muñeca</option>
</select>
</div>

<table>
<tr>
<td>Nombre: </td>
<td colspan="2">&nbsp;<input type="text" name="na" size="30" /></td>
<td></td>
</tr><tr>
<td class="padded">Nivel: </td><td class="padded">&nbsp;<input type="text" name="minle" maxlength="3" class="smalltextbox2" /> - <input type="text" name="maxle" maxlength="3" class="smalltextbox2" /></td>
<td class="padded"><table><tr><td>Required level: </td><td>&nbsp;<input type="text" name="minrl" maxlength="2" class="smalltextbox" /> - <input type="text" name="maxrl" maxlength="2" class="smalltextbox" /></td></tr></table></td><td></td>
</tr><tr><td class="padded">Usable por: </td><td class="padded">&nbsp;<select name="si" style="margin-right: 0.5em">
<option></option>
<option value="1">Alianza</option>
<option value="-1">Alianza solamente</option>
<option value="2">Horda</option>
<option value="-2">Horda solamente</option>
<option value="3">Ambos</option>
</select>
</td>
<td class="padded"><select name="ub">
<option></option>
<option value="6">Caballero de la muerte</option>
<option value="11">Druida</option>
<option value="3">Cazador</option>
<option value="8">Mago</option>
<option value="2">Paladín</option>
<option value="5">Sacerdote</option>
<option value="4">Pícaro</option>
<option value="7">Chamán</option>
<option value="9">Brujo</option>
<option value="1">Guerrero</option>
</select></td></tr><tr>
</table>



</div>



<div class="clear"></div><div class="padded">Agrupar por:
    <input type="radio" name="gb" value="" id="gb-none" checked="checked" /><label for="gb-none">Ninguno</label>
    <input type="radio" name="gb" value="1" id="gb-slot" /><label for="gb-slot">Casilla</label>
    <input type="radio" name="gb" value="2" id="gb-level" /><label for="gb-level">Nivel</label>
    <input type="radio" name="gb" value="3" id="gb-source" /><label for="gb-source">Nombre</label>
</div><div class="clear"></div><div class="beta"><input type="checkbox" name="eb" value="1" >Excluir resultados de Mists of Pandaria</div><div class="padded"></div><input type="submit" value="Aplicar filtro" />

<input type="hidden" name="upg" />

<div class="pad"></div>

</form>
</div>
