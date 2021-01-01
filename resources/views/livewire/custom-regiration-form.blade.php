<div>
    <div>
        <!-- user_type -->
     <div class="mt-4">
        <x-jet-label for="user_type" :value="__('User Type')" />
    
        <select wire:model="userstypes" id="user_type" class="block form-select mt-1 w-full" type="text" name="user_type" :value="old('user_type')" required autofocus >
            <option disabled  selected > Select user type</option>
            <option :value="__('Farmer')">Farmer</option>
            <option :value="__('Organisation')">Organisation</option>
        </select>
    </div>
    
    <!-- Phone -->
     <div class="mt-4">
        <x-jet-label for="phone" :value="__('Organisation / Farm Phone')" />
    
        <x-jet-input id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone')" required autofocus />
    </div>
    
    <!-- region -->
    <div class="mt-4">
        <x-jet-label for="region" :value="__('Organisation / Farm Region')" />
    
        <x-jet-input id="region" class="block mt-1 w-full" type="text" name="region" :value="old('region')" required autofocus />
    </div>
    
    <!-- location -->
    <div class="mt-4">
        <x-jet-label for="location" :value="__('Organisation / Farm location')" />
    
        <x-jet-input id="location" class="block mt-1 w-full" type="text" name="location" :value="old('location')" required autofocus />
    </div>
    </div>
    
</div>
